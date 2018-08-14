<?php

require_once 'Conta.php';
require_once 'Investimento.php';

class InvestimentoConservador implements Investimento
{

	private $percentual = 0.08;
	private $imposto = 0.25;

	public function calculaRendimento(Conta $conta)
	{
		$rendimentoBruto = $conta->getSaldo() * $this->percentual;
		$rendimentoLiquido = $rendimentoBruto - ($rendimentoBruto * $this->imposto);
		return $rendimentoLiquido;
	}
}