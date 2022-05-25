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

        return view('admin/crud', $tables);
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
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ];

        App::get('database')->edit('usuarios', $_POST['id'], $parameters);

        header('Location: /admin');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('usuarios', $id);

        header('Location: /admin');
    }
}
