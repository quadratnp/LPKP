<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/lpkp';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($url) {
        case $baseURL . '/index':
            require_once "Controller/Controller.php";
            $ctrl = new Controller();
            echo $ctrl->view_index();
            break;
        default:
            echo '';
            break;
    }
}
