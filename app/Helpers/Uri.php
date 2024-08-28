<?php

namespace JADS\GerenciamentoFinanceiro\Helpers;

class Uri{


    public static function get_uri(){
    return trim($_SERVER["REQUEST_URI"],"/");
    }

}