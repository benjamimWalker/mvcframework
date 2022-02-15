<?php

namespace app\core;

class Controller
{
    public function render(string $view, array $params = []): string
    {
        return Application::$instance->router->renderView($view, $params);
    }
}