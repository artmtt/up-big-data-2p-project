<?php
    $hostname = "127.0.0.1:3306";
    $dbname = "tienda_db";
    $username = "admin_user";
    $spscpass = "1needHlpPLz";

    $mysqli = new mysqli(
        hostname: $hostname,
        username: $username,
        password: $spscpass,
        database: $dbname
    );
                        
    if ($mysqli->connect_errno) {
        die("Connection error: " . $mysqli->connect_error);
    }

    return $mysqli;
?>