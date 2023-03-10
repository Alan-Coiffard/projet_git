<?php
require_once 'models/user.php';

class UserController
{

    public function index()
    {
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            require_once 'views/chat/chat.php';
        } else {
            require_once 'views/users/index.php';
        }

    }

    public function login()
    {
        if (isset($_POST['username'])  && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                if (getConnexion($_POST['username'], $_POST['password'])) {
                    echo "<p class='msg_valid'>Connexion validée</p>";
                    header('Location: index.php?controller=user&action=index');
                }
            } else {
                echo "<p class='msg_nvalid'>Données non envoyées, veuillez completer tous le champs</p>";
                require_once 'views/users/login.php';
            }
        } else {
            require_once 'views/users/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
        exit;
    }

    
    public function inscription(){
        if (isset($_POST['username'])  && isset($_POST['password'])) {       
           if(checkUsername($_POST['username'])){
                require_once 'views/users/inscription.php';
                echo "<p class='msg_error'>Le nom d'utilisateur choisi existe déjà</p>";
           }else{
            inscription($_POST['username'], $_POST['password']);
            getConnexion($_POST['username'], $_POST['password']);
           }
        } else {
            require_once 'views/users/inscription.php';
        }
    }
}
