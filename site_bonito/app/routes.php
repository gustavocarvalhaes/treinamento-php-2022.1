<?php

use App\Controllers\AdmController;
use App\Core\Router;

    $router->get('admin', 'AdmController@view');

    $router->post('admin/create', 'AdmController@create');
    $router->post('admin/delete', 'AdmController@delete');
    $router->post('admin/update', 'AdmController@edit');

    $router->get('imagens', 'GaleriaController@view');
?> 
