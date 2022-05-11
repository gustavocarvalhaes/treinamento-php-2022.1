<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function index()
    {
    }
    
    public function login()
    {
        
        $usuarios = App::get('database')->selectAll('usuarios');
        $tables = [
    
            'usuarios' => $usuarios,
    
        ];
        return view('admin/login', $tables);
    }

    public function loginvalidacao()
    { 
        
    }

    public function show()
    {

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