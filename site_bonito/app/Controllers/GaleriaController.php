<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class GaleriaController
{

    public function view()
    {

        $fotos = App::get('database')->selectAll('fotos');
       
        return view('site/galeria', compact("fotos"));
    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }
}
