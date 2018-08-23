<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$conta = new Conta('Natan', -500);
$conta->deposita(100);

echo $conta->getSaldo().'<br>';

$conta->saca(700);

echo $conta->getSaldo().'<br>';

$conta->saca(100);

echo $conta->getSaldo().'<br>';