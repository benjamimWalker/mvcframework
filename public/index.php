<?php

require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
use app\core\Request;

$app = new Application();

$app->router->get('/', fn() => 'Hello World');
$app->router->get('/contact', fn() => 'Contact');

$app->run();
