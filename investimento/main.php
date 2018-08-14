<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$conta = new Conta(2000);

$investimento = new InvestimentoConservador;

$realizador = new RealizadorDeInvestimentos;

$realizador->calcula($conta, $investimento);
