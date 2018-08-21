<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$gerador = new GeradorDeRelatorio;
$relatorioComplexo = new RelatorioComplexo;
$conta = new Conta('Natan', '112233', '4455', 500);

$relatorioSimples = new RelatorioSimples;

$gerador->imprimeRelatorio($relatorioSimples, $conta);

