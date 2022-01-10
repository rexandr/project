<?php

namespace vendor\core\base;

class View
{
    public $route = []; //current route
    public $view;       //current view
    public $layout;     //current layout

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        //if it needs data without layout
        if ($layout === false) {
            $this->layout = false;
        } else {
            //if user does not set layout then use constant layout
            $this->layout = $layout ?: LAYOUT;
        }

        $this->view = $view;
    }

    public function render($vars)
    {
        //divide array $vars into variables' collection key=>varName value=>value
        if (is_array($vars)) {
            extract($vars);
        }

        //construct path to current controller's view and require if exist
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        // start buffering
        ob_start();
        if (is_file($file_view)) {
            require $file_view;
        } else {
            echo "<p>The view <b>{$file_view}</b> does not exist in the specified path! </p>";
        }
        //take all from buffer into $content which can be passed into layout after it was rendered
        $content = ob_get_clean();


        if ($this->layout !== false) {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($file_layout)) {
                require $file_layout;
            } else {
                echo "<p>The layout <b>{$file_layout}</b> does not exist in the specified path! </p>";
            }
        }

    }
}