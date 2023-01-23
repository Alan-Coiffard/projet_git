<?php
require_once 'config.php';

function getAllUsers()
{
    global $conn;

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    } else {
        return array();
    }
}