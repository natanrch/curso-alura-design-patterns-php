<?php

require_once 'Filtro.php';
require_once 'Conta.php';

class FiltroMesCorrente extends Filtro
{
	public function __construct(Filtro $outroFiltro = null)
	{
		parent::__construct($outroFiltro);
	}

	public function filtra(Conta $conta)
	{
		if($conta->getMesDeAbertura() == 'agosto') {
			echo 'Conta caberta no mês corrente<br>';
		}
		$this->realizaOutroFiltro($conta);
	}
}