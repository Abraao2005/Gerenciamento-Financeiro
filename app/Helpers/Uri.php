<?php

namespace JADS\GerenciamentoFinanceiro\Helpers;

class Uri{


    public static function get_uri(){
    return parse_url(trim($_SERVER["REQUEST_URI"],"/"),PHP_URL_PATH);
    }

}