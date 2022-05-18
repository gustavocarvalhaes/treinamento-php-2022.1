<?php

use App\Controllers\LoginController;
use App\Core\Router;


    $router->get('login', 'LoginController@login');

    $router->get('admin', 'AdmController@view');

?> 
