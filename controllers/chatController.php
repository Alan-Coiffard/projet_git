<?php
require_once 'models/chat.php';

class chatController
{

    public function chat()
    {
        require_once 'views/chat/chat.php';
    }

    public function envoieMessage()
    {
        if (isset($_POST['message'])) {
            if (!empty($_POST['message'])) {
                sendMessage($_POST['message']);
                header('Location: index.php');
            }else{
                echo "<p class='msg_nvalid'>Veuillez écrire un message</p>";
                require_once 'views/chat/chat.php';
            }
        }else{
            require_once 'views/chat/chat.php';
        }


    }
}
