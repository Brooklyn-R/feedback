<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'Your username');  // mysql username
    define('DB_PASS', 'Your password');  // mysql user password
    define('DB_NAME', 'Your folder name');  // mysql folder name

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if($conn->connect_error) {
        die('Connection Failed' . $conn->connect_error);
    }
