<?php

namespace JADS\GerenciamentoFinanceiro\Helpers;

class Uri{


    public static function get_uri(){
     return $_SERVER["REQUEST_URI"];
    }

}