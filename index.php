<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new \app\core\Application();

$router = $app->router;

$router->get('/', function () use ($app) {});