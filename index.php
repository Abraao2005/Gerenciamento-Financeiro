<?php

use JADS\GerenciamentoFinanceiro\Controllers\Controller;
use JADS\GerenciamentoFinanceiro\Models\UserModel;

require_once(__DIR__ ."/vendor/autoload.php");
require_once "functions.php";

define("HOSTNAME","localhost");
define("DBNAME","mysql");
define("USERNAME","root");
define("USERPASS","");
$control = new Controller();

$control->view();


$result = new UserModel();



