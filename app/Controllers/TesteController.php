<?php

namespace JADS\GerenciamentoFinanceiro\Controllers;

class TesteController{


    public function index(...$params){
echo "<h1> tá sabendo</h1>";
print_r($params);
    }

    public function busca(){
        echo "t";
    }
    public function teste(...$params){
        // echo "teste";
        print_r($params);
    }
}