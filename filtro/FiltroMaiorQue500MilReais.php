<?php

require_once 'Filtro.php';
require_once 'Conta.php';

class FiltroMaiorQue500MilReais extends Filtro
{
	public function __construct(Filtro $outroFiltro = null)
	{
		parent::__construct($outroFiltro);
	}

	public function filtra(Conta $conta)
	{
		if($conta->getSaldo() > 500000) {
			echo 'Conta com mais de 500 mil reais<br>';
		}
		$this->realizaOutroFiltro($conta);
	}
}