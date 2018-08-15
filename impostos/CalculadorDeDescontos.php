<?php
require_once 'Orcamento.php';
require_once 'Desconto500Reais.php';
require_once 'DescontoPor5Itens.php';
require_once 'SemDesconto.php';

class CalculadorDeDescontos
{
	public function calcula(Orcamento $orcamento)
	{
		$d1 = new DescontoPor5Itens;
		$d2 = new Desconto500Reais;
		$d3 = new SemDesconto;

		$d1->setProximo($d2);
		$d2->setProximo($d3);

		return $d1->desconta($orcamento);
	}
}