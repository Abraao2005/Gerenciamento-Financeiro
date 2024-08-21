<?php

use JADS\GerenciamentoFinanceiro\Controllers\Controller;

require_once(__DIR__ ."/vendor/autoload.php");
require_once "functions.php";
$control = new Controller();

$control->view();


