<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$orcamento = new Orcamento(1000);

$orcamento->aplicaDescontoExtra();

echo $orcamento->getValor().'<br>';

$orcamento->reprova();
$orcamento->aplicaDescontoExtra();
echo $orcamento->getValor();

$orcamento->finaliza();