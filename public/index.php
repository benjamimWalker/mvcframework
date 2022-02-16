<?php

require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
use app\core\Request;
use app\controllers\SiteController;
use app\controllers\AuthController;

$app = new Application(dirname(__DIR__ ));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/login', [AuthController::class, 'register']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'register']);

$app->run();
