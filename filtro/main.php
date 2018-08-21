<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$conta = new Conta('julho', 100000000);
$filtro = new FiltroMaiorQue500MilReais(new FiltroMesCorrente);
$filtro->filtra($conta);