<?php
require_once 'config.php';


function sendMessage($message){
    global $conn;
    $sql = "INSERT INTO messages (user_id, message, timestamp) VALUES (1, '$message', NOW())";
    $result = $conn->query($sql);
}

function getMessages(){
    global $conn;
    // Récupération des messages
    $sql = "SELECT * FROM messages ORDER BY timestamp ASC";
    $result = $conn->query($sql);

    return $result;
}
