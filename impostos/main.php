<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

// require_once 'Orcamento.php';
// require_once 'CalculadorDeImpostos.php';
// require_once 'Imposto.php';
// require_once 'ICMS.php';
// require_once 'ISS.php';
// require_once 'ICCC.php';


$orcamento = new Orcamento(10000);

$icms = new ICCC;

$calculadorDeImposto = new CalculadorDeImpostos();

$calculadorDeImposto->calcula($orcamento,$icms);
echo "<br />";


