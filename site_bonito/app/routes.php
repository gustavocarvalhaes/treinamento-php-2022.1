<?php

use App\Controllers\LoginController;
use App\Core\Router;


    $router->get('login', 'LoginController@login');

    $router->get('admin', 'AdmController@view');

    $router->post('admin/create', 'AdmController@create');

    $router->post('admin/delete', 'AdmController@delete');

    $router->get('admin/show', 'AdmController@show');

    $router->post('admin/update', 'AdmController@update');


?> 
