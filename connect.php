<?php
$con = mysqli_connect('localhost', 'root', '', 'flixia');
if (!$con) {
    echo "fail";
    die(mysqli_error($con));
}
?>