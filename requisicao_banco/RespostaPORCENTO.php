<?php

require_once 'Resposta.php';
require_once 'Conta.php';
require_once 'Requisicao.php';

class RespostaPORCENTO implements Resposta
{

	private $proximaResposta;

	public function setProxima(Resposta $resposta)
	{
		$this->proximaResposta = $resposta;
	}

	public function responde(Requisicao $req, Conta $conta)
	{
		if ($req->getFormato() == 3) {
			return 'titular:'.$conta->getNome().'%saldo:'.$conta->getSaldo();
		} else {
			return $this->proximaResposta->responde($req, $conta);
		}
	}
}