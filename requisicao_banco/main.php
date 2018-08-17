<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// function autoload($class) {
//     include $class.".php";
// }

// spl_autoload_register("autoload");

require_once 'Conta.php';
require_once 'Formato.php';
require_once 'RealizaRequisicao.php';
require_once 'Requisicao.php';

$conta = new Conta('João', 1000);

$req = new Requisicao(Formato::$PORCENTO);

$realizaRequisicao = new RealizaRequisicao;

$resposta = $realizaRequisicao->requisita($req, $conta);

echo $resposta;