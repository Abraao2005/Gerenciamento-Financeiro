<?php

namespace JADS\GerenciamentoFinanceiro\Controllers;

use JADS\GerenciamentoFinanceiro\Helpers\Routes;
use JADS\GerenciamentoFinanceiro\Helpers\Uri;

class Controller
{

    public function view()
    {

        // O 0 vai ser igual ao controller e 1 o método

        $uri = $this->Uri();
        $routes = new Routes();
        $routes = $routes->get_routes();
        if (isset($routes[$uri])) {
            $result = explode("@", $routes[$uri]);
            $caminho = "JADS\\GerenciamentoFinanceiro\\Controllers\\" . $result[0];

            if (class_exists($caminho)) {
                $controller = new $caminho();
                $metodo = $result[1];
                $controller->$metodo(...$this->getParams());
            } else {
                require_once(get_view_path() . "Standard/notFound.php");
            }
        } else {
            require_once(get_view_path() . "Standard/notFound.php");
        }
    }

    private function getParams()
    {
        $uri = explode("/", Uri::get_uri());

        $params = array_splice($uri, 1);

        return $params;
    }
    private function uri()
    {

        $params = $this->getParams();
        $routes = new Routes();
        $routes = $routes->get_routes();
        $uri = explode("/", Uri::get_uri());

        foreach ($routes as $route => $value) {
            $routeExplode = explode("/", $route);
            if ($uri[0] == $routeExplode[0]) {
                preg_match("/\{[^{}]*\}/", $route, $matchs);

                $routeParts = explode("/", $route);

                // Remove o primeiro elemento do array $routeParts
                $routePartsWithoutFirst = array_slice($routeParts, 1);

                // Verifica se o número de elementos restantes é igual ao número de parâmetros
                if (count($routePartsWithoutFirst) === count($params) && !empty($matchs) && !empty($params)) {
                    return $route;
                }
            }
        }
        return  Uri::get_uri();
    }
}
