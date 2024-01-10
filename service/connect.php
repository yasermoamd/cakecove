<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'usbw';
$db_name = 'cakecove';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_errno() . ' - ' . mysqli_connect_error());
} else {
    // print('Connected Successfully!');
}