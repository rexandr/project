<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\User;

class RegisterController extends AppController
{
    public function indexAction()
    {

    }

    public function regAction()
    {
        if ($_POST['password'] === $_POST['repeat']) {
            $reg = [];
            $reg ['name'] = $_POST['name'];
            $reg ['email'] = $_POST['email'];
            $reg ['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $model = new User();
            $model->write($reg);
            header("Location:/sign-in");
        }
    }

}