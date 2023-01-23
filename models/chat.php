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

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="message">';
            echo '<p>' . $row["message"] . '</p>';
            echo '<span class="timestamp">' . $row["timestamp"] . '</span>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucun message à afficher.</p>';
    }
}
getMessages();