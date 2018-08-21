<?php

//Padrão decorator
abstract class Filtro
{
	private $outroFiltro;

	public function __construct(Filtro $outroFiltro = null)
	{
		$this->outroFiltro = $outroFiltro;
	}

	protected function realizaOutroFiltro(Conta $conta)
	{
		if(is_null($this->outroFiltro)) return 0;
		return $this->outroFiltro->filtra($conta);
	}

	public abstract function filtra(Conta $conta);
}