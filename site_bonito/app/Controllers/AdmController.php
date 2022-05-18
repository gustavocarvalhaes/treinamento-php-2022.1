<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmController
{

    public function view()
    {
        $usuarios = App::get('database')->selectAll('usuarios');
        $tables = [

            'usuarios' => $usuarios,

        ];
    
        return view('admin/crud', compact("usuarios"));

    }

    public function show()
    {

    }

    public function create()
    {
        $parameters = [

            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];
        app::get('database')->insert('usuarios', $parameters);

        header('Location: /admin');
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
        app::get('database')->delete('usuarios', $_POST['id']);
        header('Location: /admin');
    }
}
