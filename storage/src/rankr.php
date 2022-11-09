<?php declare(strict_types=1);
//defines
use Rankr\Controller\Config;
use Rankr\Controller\Error;
use Rankr\Controller\Router;

session_start();
error_reporting(E_ALL);
define('DIR_ROOT', '../');

if (include_once DIR_ROOT . 'vendor/autoload.php') {
    $app = new Rankr\Controller\Router(
        $_SERVER['REQUEST_URI'],
        new Config(Router::CONFIG),
        new Config(Error::CONFIG)
    );
    $view = $app->route();
    echo $view->render();
} else {
    echo "Can't start service, no autoloader found";
}
