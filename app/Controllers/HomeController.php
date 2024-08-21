<?php


namespace JADS\GerenciamentoFinanceiro\Controllers;

class HomeController{
    public function index(){
        require_once(get_view_path() . "Standard/header.php");
        echo "teste";

        require_once(get_view_path() . "Standard/footer.php");
        
    }
}