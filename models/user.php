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

function getConnexion($login, $pwd)
{
    global $conn;
    $users = array();
    $res = false;
    $pwd = sha1($pwd);
    $sql = "SELECT * FROM users where username='$login' and password='$pwd'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $res = true;
        }
    }
    return $res;
}

function checkUsername($login)
{
    global $conn;
    $res=false;
    $sql = "SELECT username FROM users WHERE username = '$login'";
    $result = $conn -> query($sql);
    if($result->num_rows > 0){
        $res=true;
    }
    return $res; 
}

function inscription($login, $pwd)
{
    global $conn;
    $pwd = sha1($pwd);
    $res=true;
    $sql = "INSERT INTO users (username, password) VALUES ('$login', '$pwd')";
    $result = $conn -> query($sql);
    return $res; 
}