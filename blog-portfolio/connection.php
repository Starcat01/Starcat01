<?php
function dbConnect()
{
    $server_name = "localhost";
    $db_username = "root";
    $db_password = "atsuoiguchi";
    $db_name = "blog";

    $conn = new mysqli($server_name, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("ERROR CONNECTING TO THE DATABASE: " . $conn->connect_error);
    } else {
        return $conn;
    }
}
