<?php

namespace app\controllers;

use app\controllers\App;

class Main extends App
{
    //change layout for all actions og current class
    public $layout = 'main';

    public function indexAction()
    {
//        //if data should be returned without layout
//        $this->layout = false;
//        echo 'Here no layout and no content';

        //changing view and layout for current action
        $this->view = 'test';
        $this->layout = 'default';

        //passing variable to view
        $name = 'TestName';
        $hi = 'Hello';
        $colors =
            [
                'white' => 'white',
                'red' => 'red',
            ];
        $title = __CLASS__.' - '.__FUNCTION__;
        $this->set(compact('name', 'hi', 'colors', 'title'));
        //$this->set(['name' => $name, 'hi' => 'Hello']);
    }
}