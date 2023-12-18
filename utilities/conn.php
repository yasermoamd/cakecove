<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "usbw";
    $dbname = "cakecove";


    $conn =  new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // print_r("Connected successfully");
    }