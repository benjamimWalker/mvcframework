<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

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

    public static function handleContact()
    {
        return 'Handling submitted data';
    }
}