<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select($idp, $table,)
    {
        $sql = "select * from '{$table}' WHERE id = {$idp}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parametros)
    {

        $sql = "insert into `{$table}` (nome, email, senha) values ('{$parametros['nome']}',
    '{$parametros['email']}', '{$parametros['senha']}')";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit($idp, $table, $parametros)
    {
        $sql = "update `{$table}` set nome = '{$parametros['nome']}', email = '{$parametros['email']}', senha = '{$parametros['senha']}',
        informacoes = '{$parametros['informacoes']}' ";

        if ($parametros['foto_perfil'] != '') {
            $sql = $sql . ", foto_perfil = '{$parametros['foto_perfil']}' WHERE id = {$idp}";
        } else {
            $sql = $sql . "WHERE id = {$idp}";
        }
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $idp)
    {
        $sql = "delete from {$table} where id = {$idp}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
