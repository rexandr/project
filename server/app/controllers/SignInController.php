<?php

namespace app\controllers;

//use app\controllers\AppController;
use app\models\User;
use vendor\core\base\Controller;

class SignInController extends Controller
{
    public function indexAction()
    {
        //$msg = 'Message';

        $model = new User();
        $user = $model->findOne($_POST['name'], 'name');

        if (isset($_POST['forgot'])&&($user[0]['email']===$_POST['email']))
        {
            $newPass = $this->randP();
            $model->update('password', password_hash($newPass, PASSWORD_DEFAULT), 'email', $user[0]['email']);
            imap_mail($user[0]['email'], 'Your new password', $newPass);
            header('/sign-in');
        }

//        echo '<pre>';
//        print_r($_POST);
//        echo '</pre>';
        
        if (isset($_POST['name']))
        {
            if (isset($user))
            {
                if (password_verify($_POST['password'], $user[0]['password']))
                {
                    //$w = 'Sign In success!';
                    $_SESSION['name'] = $user[0]['name'];
                    header("Location:/");
                    //$this->set(compact('w'));
                }else{
                    //$msg = 'Wrong user name or password.';
                    //$this->set(compact('msg'));
                    header("Location:/sign-in");
                    //echo $msg;
                }
            }else{
               // $msg = 'Wrong user name or password.';
                header("Location:/sign-in");
            }
        }
        //$this->set(compact('msg'));
    }

    private function randP()
    {
        $random_string = '';
        $mix = '1234567890qwertyuiop[];lkjhgfdsazxcvbnm,.QAZXSWEDCVFRTGBNHYUJM<KIOL:P/';
        $mix_length = strlen($mix)-1;
        for ($i=0; $i<=20; $i++)
        {
            $val = $mix[mt_rand(0, $mix_length)];
            $random_string .= $val;
        }

        return $random_string;
    }
}
