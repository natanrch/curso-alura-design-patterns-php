<?php

require_once 'Requisicao.php';
require_once 'Conta.php';
require_once 'RespostaXML.php';
require_once 'RespostaCSV.php';
require_once 'RespostaPORCENTO.php';

class RealizaRequisicao
{
	public function requisita(Requisicao $req, Conta $conta)
	{

		// print_r($req);
		// echo '<br>';
		// print_r($conta);
		$res1 = new RespostaXML;
		$res2 = new RespostaCSV;
		$res3 = new RespostaPORCENTO;

		$res1->setProxima($res2);
		$res2->setProxima($res3);

		return $res1->responde($req, $conta);
	}
}