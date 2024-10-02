<?php
require "vendor/autoload.php";
session_start();

use Config\Router;

$router = new Router();

/**
 * J'utilise la méthode addRoute de mon controller pour ajouter des routes au controller
 * Cette méthode prend trois arguments, la route, le controllers et la méthode executée
 */

$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/register', 'RegisterController', 'index');
$router->addRoute('/login', 'LoginController', 'index');
$router->addRoute('/logout', 'LogoutController', 'logout');
$router->handleRequest();