<?php
require_once 'models/user.php';

class UserController {

    public function index() {
        require_once 'views/users/index.php';
    }

    public function login() {
        if(isset($_POST['username'])  && isset($_POST['password'])) {
            if(!empty($_POST['username']) && !empty($_POST['password'])) {
                echo "<p class='msg_valid'>Données envoyées</p>";
                
            } else {
                echo "<p class='msg_nvalid'>Données non envoyées, veuillez completer tous le champs</p>";
            }
            require_once 'views/users/login.php';
        } else {
            require_once 'views/users/login.php';
        }
    }
}
