<?php
namespace App\Http\Web\Controllers;

use App\Http\Web\Controllers\BaseController;

class HomeController extends BaseController {

    function get(){
        $this->view("Home");
    }

}