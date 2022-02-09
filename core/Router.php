<?php

namespace app\core;

use JetBrains\PhpStorm\Pure;

class Router
{
    protected array $routes = [];
    public Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get(string $path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPaht();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            echo 'Not Found';
            exit;
        }

        echo call_user_func($callback);
    }
}