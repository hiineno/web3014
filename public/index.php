<?php
use App\Controllers\SiteController;
use App\Router;
require_once __DIR__ . "/../vendor/autoload.php";
$router = new Router();
Router::get('/', [SiteController::class, 'index']);
Router::get('/product', [SiteController::class, 'product']);
Router::get('/detail', [SiteController::class, 'detail']);
$router->resole();
?>