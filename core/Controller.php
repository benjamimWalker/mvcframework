<?php

namespace app\core;

class Controller
{
    public string $layout = 'main';
    public function render(string $view, array $params = []): string
    {
        return Application::$instance->router->renderView($view, $params);
    }

    protected function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }
}