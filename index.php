<?php

if(!empty($_SESSION['userid'])){
    header('Location: http://myshop.loc');
}

session_start();

require 'autoload.php';
require 'routes.php';

$uri = $_SERVER['REQUEST_URI'];

$router->dispatch($uri);
    