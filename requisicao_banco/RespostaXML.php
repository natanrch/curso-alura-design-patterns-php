<?php

require_once 'Resposta.php';
require_once 'Conta.php';
require_once 'Requisicao.php';

class RespostaXML implements Resposta
{

	private $proximaResposta;

	public function setProxima(Resposta $resposta)
	{
		$this->proximaResposta = $resposta;
	}

	public function responde(Requisicao $req, Conta $conta)
	{
		if ($req->getFormato() == 1) {
			return '<conta><titular>'.$conta->getNome().'</titular><saldo>'.$conta->getSaldo().'</saldo></conta>';
		} else {
			return $this->proximaResposta->responde($req, $conta);
		}
	}
}