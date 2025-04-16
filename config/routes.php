<?php
require_once '../core/Router.php';

$router = new Router();

// Home
$router->get('/', [App\Controllers\HomeController::class, 'index']);

// About
$router->get('/about', [App\Controllers\AboutController::class, 'index']);

// Contact
$router->get('/contact', [App\Controllers\ContactController::class, 'index']);

// Gallery
$router->get('/gallery', [App\Controllers\GalleryController::class, 'index']);

// Team
$router->get('/team', [App\Controllers\TeamController::class, 'index']);

// Progress
$router->get('/progress', [App\Controllers\ProgressController::class, 'index']);

return $router;
