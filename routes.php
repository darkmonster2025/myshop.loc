<?php

use MyShop\Router;
use MyShop\Controllers\UserController;
use MyShop\Controllers\AuthController;

$router = new Router();

$router->addRoute('/', UserController::class, 'index');
$router->addRoute('/home', AuthController::class, 'home');
$router->addRoute('/products', AuthController::class, 'products');
$router->addRoute('/createProduct', AuthController::class, 'createProduct');
$router->addRoute('/login', AuthController::class, 'login');
$router->addRoute('/loginSubmit', AuthController::class, 'loginSubmit');
$router->addRoute('/registration', AuthController::class, 'registration');
$router->addRoute('/registrationSubmit', AuthController::class, 'registrationSubmit');
$router->addRoute('/logout', AuthController::class, 'logout');
$router->addRoute('/profile', AuthController::class, 'profile');
$router->addRoute('/updateSubmit', AuthController::class, 'updateSubmit');
