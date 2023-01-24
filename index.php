<?php
session_start();

require_once 'config.php';
require_once 'controllers/userController.php';
require_once 'controllers/chatController.php';



$controller = 'chat';
$action = 'chat';

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}


$controller = ucwords($controller) . 'Controller';


if (class_exists($controller)) {
    $controller = new $controller();
    if (method_exists($controller, $action)) {
        if (isset($_GET['id'])) {
            $controller->{$action}($_GET['id']);
        } else {
            $controller->{$action}();
        }
    } else {
        die('Action not found');
    }
} else {
    die('Controller not found');
}
