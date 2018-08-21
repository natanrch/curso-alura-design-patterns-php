<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class IMA extends Imposto
{
	public function __construct(Imposto $outroImposto = null)
	{
		parent::__construct($outroImposto);
	}
	
	public function calcula(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.20 + $this->calculoDoOutroImposto($orcamento);
	}
}