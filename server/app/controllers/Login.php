<?php

namespace app\controllers;

use frameworkVendor\core\base\Controller;

use R;

class Login extends Controller
{
    public function index()
    {
        $title = 'Login';
        $this->set(compact('title'));
    }
}