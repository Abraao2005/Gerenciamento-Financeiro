<?php


namespace JADS\GerenciamentoFinanceiro\Models;

use Exception;
use PDO;
use PDOException;

abstract class DbQuerys extends DbModel
{

    public function query_non_result($dbname, $sql, $param = [])
    {

        try {
            $pdo =  $this->getConnection();
            $pdo->beginTransaction();
            !$dbname  || !$sql ? throw new Exception("Dados insuficientes do banco") : "";

            $pdo->query("USE $dbname");

            $statement = $pdo->prepare($sql);
            $statement->execute($param);



            $pdo->commit();
        } catch (PDOException $err) {
            echo  $err->getMessage();
        }
    }
    public function query_with_result($dbname, $sql, $param = [])
    {

        try {
            $pdo =  $this->getConnection();
            $pdo->beginTransaction();
            !$dbname  || !$sql ? throw new Exception("Dados insuficientes do banco") : "";

            $pdo->query("USE $dbname");
            $statement = $pdo->prepare($sql);
            $statement->execute($param);


            $pdo->commit();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo  $err->getMessage();
        }
    }
}
