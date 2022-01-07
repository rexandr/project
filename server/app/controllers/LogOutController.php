<?php

namespace app\controllers;
use app\controllers\AppController;

class LogOutController extends AppController
{
    public function indexAction()
    {
        header('/');
//        unset($_SESSION['name']);
//        unset($_SESSION['config']);
        $_SESSION = [];
        $_POST = [];

    }
}