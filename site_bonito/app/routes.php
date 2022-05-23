<?php

use App\Controllers\AdmController;
use App\Core\Router;


    $router->get('admin', 'AdmController@view');

    $router->post('admin/create', 'AdmController@create');

    $router->post('admin/delete', 'AdmController@delete');

    $router->get('admin/show', 'AdmController@show');

    $router->post('admin/update', 'AdmController@update');

?> 
