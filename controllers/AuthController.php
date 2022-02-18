<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login(): string
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request): string
    {
        if ($request->isPost()) {
            $registerModel = new RegisterModel();
            return 'Handle man';
        }
        return $this->render('register');
    }
}