<?php


namespace JADS\GerenciamentoFinanceiro\Controllers;

use JADS\GerenciamentoFinanceiro\Helpers\Uri;
use JADS\GerenciamentoFinanceiro\Models\UserModel;

class RegisterController
{
    public function index()
    {
        require_once(get_view_path() . "Standard/header.php");

        require_once(get_view_path() . "HomePage/register.php");


        require_once(get_view_path() . "Standard/footer.php");
    }

    public function register($username,$password){
        header("Content-type:application/json");
       $userModel = new UserModel();
       $userModel->insertUser();
        
    }



}
