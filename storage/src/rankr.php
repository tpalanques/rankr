<?php declare(strict_types=1);
//defines
session_start();
error_reporting(E_ALL);
define('DIR_ROOT', '../');
if (include_once DIR_ROOT . 'vendor/autoload.php') {
    $app = new Rankr\Controller\Router($_SERVER['REQUEST_URI']);
    $view = $app->route();
    echo $view->render();
} else {
    echo "Can't start service, no autoloader found";
}
