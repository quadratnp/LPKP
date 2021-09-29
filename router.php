<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/lpkp';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($url) {
        case $baseURL . '/home':
            require_once "Controller/Controller.php";
            $ctrl = new Controller();
            echo $ctrl->view_index();
            break;
        case $baseURL . '/about':
            require_once "Controller/Controller.php";
            $ctrl = new Controller();
            echo $ctrl->view_about();
            break;
        default:
            echo '';
            break;
    }
}
