<?php


namespace JADS\GerenciamentoFinanceiro\Models;

use PDO;

abstract class DbConnect{

    protected PDO $pdo;

    public function __construct()
    {
        
    }
}