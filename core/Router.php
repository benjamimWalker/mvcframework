<?php

namespace app\core;

use JetBrains\PhpStorm\Pure;

class Router
{
    protected array $routes = [];
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $path, string $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPaht();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            return 'Not Found';
        }
        if (is_string($callback)) {
            $this->renderView($callback);
            exit();
        }
        return call_user_func($callback);
    }

    private function renderView(string $view)
    {
        include_once __DIR__ . "/../views/$view.php";
    }
}