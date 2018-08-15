<?php

require_once 'Conta.php';
require_once 'Investimento.php';

class InvestimentoArrojado implements Investimento
{

	private $percentual;
	private $imposto = 0.25;

	public function calculaRendimento(Conta $conta)
	{

		$chance = $this->chance();
		$rendimentoBruto = $conta->getSaldo() * $this->percentual;
		$rendimentoLiquido = $rendimentoBruto - ($rendimentoBruto * $this->imposto);
		return $rendimentoLiquido;
	}

	private function chance()
	{
		$chance = mt_rand(1,100);
				
		if ($chance <= 20) {
			$this->percentual = 0.05;
		} else if ($chance > 20 && $chance <= 50) {
			$this->percentual = 0.03;
		} else {
			$this->percentual = 0.006;
		}
	}
}