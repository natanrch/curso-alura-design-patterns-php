<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class CalculadorDeImpostos
{
	//Strategy Design Pattern
	public function calcula(Orcamento $orcamento, Imposto $imposto)
	{
		$valor = $imposto->calcula($orcamento);
		echo $valor;
	}
}