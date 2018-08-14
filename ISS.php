<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class ISS implements Imposto
{
	public function calcula(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.06;
	}
}