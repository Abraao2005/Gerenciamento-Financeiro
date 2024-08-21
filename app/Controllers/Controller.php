<?php

namespace JADS\GerenciamentoFinanceiro\Controllers;

use JADS\GerenciamentoFinanceiro\Helpers\Routes;
use JADS\GerenciamentoFinanceiro\Helpers\Uri;

class Controller
{

    public function view()
    {
        $uri = Uri::get_uri();
        $routes = (new Routes)->get_routes();

        if (isset($routes[$uri])) {
            // O 0 vai ser igual ao controller e 1 o método
            $result = explode("@", $routes[$uri]);

            $caminho = "JADS\\GerenciamentoFinanceiro\\Controllers\\" . $result[0];

            if (class_exists($caminho)) {
                $controller = new $caminho();
                $metodo = $result[1];
                $controller->$metodo();
            }
        } else {
            require_once(get_view_path() . "Standard/notFound.php");
        }
    }
}
