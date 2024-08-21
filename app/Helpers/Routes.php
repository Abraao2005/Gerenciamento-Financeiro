<?php

namespace JADS\GerenciamentoFinanceiro\Helpers;

class Routes
{

    private array $routes;

    public function __construct()
    {
        $this->routes = [
            "/" => "HomeController@index"
        ];
    }


    public function get_routes()
    {
        return $this->routes;
    }
}
