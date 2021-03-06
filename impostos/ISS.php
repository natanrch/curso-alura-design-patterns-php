<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class ISS extends Imposto
{

	public function __construct(Imposto $outroImposto = null)
	{
		parent::__construct($outroImposto);
	}
	
	public function calcula(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.06 + $this->calculoDoOutroImposto($orcamento);
	}
}