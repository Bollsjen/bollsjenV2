<?php

namespace App\Http\Web\Controllers;

class BaseController {

    public function view1($view){
        $favicon = $this->favicon();
        require_once (__DIR__."/../../../views/_Layout/Header.php");
        if(!file_exists(__DIR__."/../../../views/".$view.".php")){
            require_once (__DIR__."/../../../views/404/NotFound.php");
        }else{
            require_once (__DIR__."/../../../views/".$view.".php");
        }
        require_once (__DIR__."/../../../views/_Layout/Footer.php");
    }

    public function view2($view, $params){
        $data = $params;
        require_once (__DIR__."/../../../views/_Layout/Header.php");
        if(!file_exists(__DIR__."/../../../views/".$view.".php")){
            require_once (__DIR__."/../../../views/404/NotFound.php");
        }else{
            require_once (__DIR__."/../../../views/".$view.".php");
        }
        require_once (__DIR__."/../../../views/_Layout/Footer.php");
    }

    public function __call($method, $arguments)
    {
        if($method == 'view'){
            if(count($arguments) == 1){
                return call_user_func_array(array($this, 'view1'), $arguments);
            }else if(count($arguments) == 2){
                return call_user_func_array(array($this, 'view2'), $arguments);
            }
        }
    }

    public function favicon() : string{
        return '<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>';
    }
}