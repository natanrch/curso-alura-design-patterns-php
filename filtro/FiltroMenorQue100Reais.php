<?php

require_once 'Filtro.php';
require_once 'Conta.php';

class FiltroMenorQue100Reais extends Filtro
{
	public function __construct(Filtro $outroFiltro = null)
	{
		parent::__construct($outroFiltro);
	}

	public function filtra(Conta $conta)
	{
		if($conta->getSaldo() < 100) {
			echo 'Conta com menos de 100 reais<br>';
		}
		$this->realizaOutroFiltro($conta);
	}
}