<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\User;

class SignInController extends AppController
{
    public function indexAction()
    {
        if ($_POST)
        {
            $model = new User();
            if ($model->findOne($_POST['name'], 'name'))
            {
                if (password_verify($_POST['password'], $model->findOne($_POST['name'], 'name')[0]['password']))
                {
                    header("Location:/success/signin");
                }else{
                    echo '<br>password not ok<br>';
                }
            }else{
                echo '<br>wrong';
            }
        }
    }
}
