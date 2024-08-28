<?php


namespace JADS\GerenciamentoFinanceiro\Controllers;

class HomeController
{
    public function index()
    {
        require_once(get_view_path() . "Standard/header.php");
        
        if(isset($_SESSION["login"]) && $_SESSION["login"] != true){
         }else{
            require_once(get_view_path() . "HomePage/login.php");

         }
        
        require_once(get_view_path() . "Standard/footer.php");
    }
}
