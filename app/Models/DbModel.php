<?php


namespace JADS\GerenciamentoFinanceiro\Models;

use PDO;
use PDOException;

abstract class DbModel{

    protected PDO $pdo;

   
    public function getConnection(){
        try
        {
            $pdo = new PDO("mysql:host=".HOSTNAME.";dbname=". DBNAME, USERNAME, USERPASS);

        }catch(PDOException $err){
            echo $err->getMessage();
        }
        return $pdo;
    }
}