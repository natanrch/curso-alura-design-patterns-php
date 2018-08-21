<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class ICMS extends Imposto
{

	public function __construct(Imposto $outroImposto = null)
	{
		parent::__construct($outroImposto);
	}
	
	public function calcula(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.05;
	}
}