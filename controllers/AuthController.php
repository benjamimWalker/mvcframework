<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login(): string
    {
        return $this->render('login');
    }

    public function register(Request $request): string
    {
        if ($request->isPost()) {
            return 'Handle man';
        }
        return $this->render('register');
    }
}