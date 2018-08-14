<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class ICMS implements Imposto
{
	public function calcula(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.05 + 50;
	}
}