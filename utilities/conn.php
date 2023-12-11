<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "usbw";
    $dbname = "cakecove";


    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }