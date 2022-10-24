<?php
namespace App\Http\Web\Controllers;

use App\Http\Web\Controllers\BaseController;

class GeneralController extends BaseController {

    function getProjects(){
        $this->view("Projects/Projects");
    }

}