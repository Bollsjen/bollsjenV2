<?php

namespace App\routes;

use App\Routes\Router;

use App\Http\Web\Controllers\HomeController;
use App\Http\Web\Controllers\GeneralController;
use App\Htpp\Web\Controllers\NotFoundController;

class Web{
    static function init(){
        Router::get('/', HomeController::class . '::get');
        Router::get('/projects', GeneralController::class . '::getProjects');

        Router::addNotFoundHandler(function($param){
            $notFound = new NotFoundController();
            $notFound->index($param);
        });

        Router::run();
    }
}