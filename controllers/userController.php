<?php
require_once 'models/user.php';

class UserController {

    public function index() {
        require_once 'views/users/index.php';
    }

    public function chat() {
        require_once 'views/users/chat.php';
    }

    public function login() {
        if(isset($_POST['username'])  && isset($_POST['password'])) {
            if(!empty($_POST['username']) && !empty($_POST['password'])) {
                if(getConnexion($_POST['username'], $_POST['password'])) {
                    echo "<p class='msg_valid'>Connexion validée</p>";
                    header('Location: index.php?controller=user&action=chat');
                }
            } else {
                echo "<p class='msg_nvalid'>Données non envoyées, veuillez completer tous le champs</p>";
                require_once 'views/users/login.php';
            }
        } else {
            require_once 'views/users/login.php';
        }
    }
}
