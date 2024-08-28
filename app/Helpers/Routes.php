<?php

namespace JADS\GerenciamentoFinanceiro\Helpers;

class Routes
{

    private array $routes;

    public function __construct()
    {
        $this->routes = [
            "" => "HomeController@index",
            "teste" => "TesteController@index",
            "teste/{id}" => "TesteController@busca",
            "quadrado" => "TesteController@teste",
            "quadrado/{id}" => "TesteController@index",
            "quadrado/{id}/{dd}" => "9h@a",
        ];
    }


    public function get_routes()
    {
        return $this->routes;
    }

}
