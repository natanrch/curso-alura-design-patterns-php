<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class ICCC extends Imposto
{

	public function __construct(Imposto $outroImposto = null)
	{
		parent::__construct($outroImposto);
	}

	public function calcula(Orcamento $orcamento)
	{
		if ($orcamento->getValor() < 1000) {
			return $orcamento->getValor() * 0.05;
		} else if ($orcamento->getValor() >= 1000 && $orcamento->getValor() <= 3000) {
			return $orcamento->getValor() * 0.07;
		} else if ($orcamento->getValor() > 3000) {
			return $orcamento->getValor() * 0.08 + 30;
		}
	}
}