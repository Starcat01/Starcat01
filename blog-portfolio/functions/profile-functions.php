<?php

require_once 'connection.php';

function getProfileDetails($profile_id)
{
    $conn = dbConnect();
    $sql = "SELECT * FROM accounts INNER JOIN users ON accounts.account_id = users.account_id WHERE accounts.account_id = $profile_id";

    if ($result = $conn->query($sql)) {
        return $result->fetch_assoc();
    } else {
        die("Error: " . $conn->error);
    }
}
