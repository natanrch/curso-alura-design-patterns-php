<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';

class CalculadorDeImpostos
{
	public function calcula(Orcamento $orcamento, Imposto $imposto)
	{
		$valor = $imposto->calcula($orcamento);
		echo $valor;
	}
}