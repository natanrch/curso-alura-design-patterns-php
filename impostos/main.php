<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");


// $orcamento = new Orcamento(10000);

// $icms = new ICCC;

// $calculadorDeImposto = new CalculadorDeImpostos();

// $calculadorDeImposto->calcula($orcamento,$icms);
// echo "<br />";

$calculador = new CalculadorDeImpostos();
$iss = new ISS(new ICMS);
$ima = new IMA($iss);
$ikcv = new IKCV($iss);

$orcamento = new Orcamento(1000.0);
$orcamento->addItem(new Item("CANETA", 150.0));
$orcamento->addItem(new Item("CANETA", 200.0));
$orcamento->addItem(new Item("LAPIS", 99.0));

 
;

$imposto = $calculador->calcula($orcamento, $ikcv);

echo $imposto;

