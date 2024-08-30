<?php


namespace JADS\GerenciamentoFinanceiro\Models;

use Exception;
use PDO;
use PDOException;

class UserModel extends DbQuerys
{



    public function getUsers($param = [])
    {
        try {
            $result =  $this->query_with_result("test", "SELECT * FROM users");
            return $result;
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }
    public function getUser($param = [])
    {
        try {
            $result =  $this->query_with_result("test", "SELECT * FROM users");
            return $result;
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }
    public function insertUser($param = [])
    {
        try {
            $result =  $this->query_with_result("test", "SELECT * FROM users");
            return $result;
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }
    public function delete($param = [])
    {
        try {
            $result =  $this->query_with_result("test", "SELECT * FROM users");
            return $result;
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }
}
