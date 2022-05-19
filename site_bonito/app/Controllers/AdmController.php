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
        // $parameters = [

        //     'nome' => $_GET['nome'],
        //     'email' => $_GET['email'],
        //     'senha' => $_GET['senha'],
        // ];


        app::get('database')->select($_GET['id'], 'usuarios')->get();

        header('Location: /admin');
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
        $parameters = [

            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];
        app::get('database')->edit($_POST['id'], 'usuarios', $parameters);

        header('Location: /admin');  
    }

    public function delete()
    {
        app::get('database')->delete('usuarios', $_POST['id']);
        header('Location: /admin');
    }
}
