<?php
//Strategy Design Pattern
require_once 'Orcamento.php';

abstract class Imposto
{
	private $outroImposto;

	public function __construct(Imposto $outroImposto = null)
	{
		$this->outroImposto = $outroImposto;
	}

	protected function calculoDoOutroImposto(Orcamento $orcamento)
	{
		if(is_null($this->outroImposto)) return 0;
		return $this->outroImposto->calcula($orcamento);
	}

	public abstract function calcula(Orcamento $orcamento);
}