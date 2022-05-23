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

    public function select($idp, $table)
    {
        $sql = sprintf(
            'SELECT * FROM %s WHERE %s', 
            $table,
            'id = :id'
        );

        try {
            $statement = $this->pdo->prepare($sql);
    
            $statement->execute(compact('id'));

            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die("An error occurred when trying to select from database: {$e->getMessage()}");
        }
    }

    public function insert($table, $parametros)
    {

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)', 
            $table, 
            implode(', ', array_keys($parametros)),
            ':' . implode(', :', array_keys($parametros))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parametros);
        } catch (Exception $e) {
            die("An error occurred when trying to insert into database: {$e->getMessage()}");
        }
    }

    public function edit($idp, $table, $parametros)
    {
        $sql = sprintf(
            'UPDATE %s
            SET %s
            WHERE %s;', 
            $table,
            implode(', ', array_map(function ($parametros) {
                return "{$parametros} = :{$parametros}";
            }, array_keys($parametros))),
            'id = :id'
        );

        $parametros['id'] = $idp;

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parametros);
        } catch (Exception $e) {
            die("An error occurred when trying to update database: {$e->getMessage()}");
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s;', 
            $table,
            "id = :id"
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
        } catch (Exception $e) {
            die("An error occurred when trying to delete from database: {$e->getMessage()}");
        }
    }

}
