<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function contact()
    {
        return $this->render('contact');
    }

    public function home()
    {
        $params = [
            'name' => 'hehe boi'
        ];

        return $this->render('home', $params);
    }

    public static function handleContact(Request $request): array
    {
        return $request->getBody();
    }
}