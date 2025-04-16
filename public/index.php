<?php
//Define base path
define('BASE_PATH', dirname(__DIR__));

// Load configuration
spl_autoload_register(function ($className) {
    $file = BASE_PATH . '/' .str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Get the URL
$url = isset($_GET['url']) ? $_GET['url'] : '';
$url = rtrim($url, '/');

//Intialize router
$router = new Core\Router();

// Load routes
require_once BASE_PATH . '/config/routes.php';

// Dispatch the request
$router->dispatch($url);