<?php

require_once 'Conta.php';
require_once 'Investimento.php';

class RealizadorDeInvestimentos
{
	public function calcula(Conta $conta, Investimento $investimento)
	{
		$rendimento = $investimento->calculaRendimento($conta);
		//$valor = $imposto->calcula($orcamento);
		echo $rendimento;
	}
}