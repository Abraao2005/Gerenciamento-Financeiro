<?php

namespace JADS\GerenciamentoFinanceiro\Helpers;

class Routes
{

    private array $routes;

    public function __construct()
    {
        $this->routes = [
            "" => "HomeController@index",
            "register"=> "RegisterController@index",
            "register/{username}/{password}"=> "RegisterController@register"
        ];
    }


    public function get_routes()
    {
        return $this->routes;
    }

}
