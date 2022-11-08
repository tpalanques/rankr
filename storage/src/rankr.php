<?php
//defines
session_start();
error_reporting(E_ALL);
define('DIR_ROOT', '../');

if (include_once DIR_ROOT . 'vendor/autoload.php') {
    //$app = new Controller\Router();
    //$app->route($_SERVER['REQUEST_URI']);ç
    echo "Service ready to rock";
} else {
    echo "Can't start service, no autoloader found";
}
