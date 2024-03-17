<?php
function check_login() {
    // Start the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // Redirect the user to the login page
        header('Location: login.php');
        exit;
    }

    return true;
}
?>
