<?php
namespace App\Http\Web\Controllers;

use App\Http\Web\Controllers\BaseController;

class NotFoundController extends BaseController {

    public function index($params){
        $this->view("NotFound/NotFound", $params);
    }

}