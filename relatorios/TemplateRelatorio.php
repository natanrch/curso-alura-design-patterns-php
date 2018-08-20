<?php

require_once 'Relatorio.php';

abstract class Relatorio implements Relatorio
{

	private $cabecalho;
	private $rodape;
	private $conta;

	public function imprimeRelatorio(Conta $conta)
	{
		$this->cabecalho = $this->criaCabecalho();
		$this->rodape = $this->criaRodape();
		$this->corpo = $this->criaCorpo();

		$relatorioImpresso = $this->cabecalho.$this->corpo.$this->rodape;
		return $relatorioImpresso;
		
	}

	protected abstract function criaCabecalho();
	protected abstract function criaRodape();
	protected abstract function criaCorpo(Conta $conta);
	// public function imprimeRelatorio(Conta $conta)
	// {
	// 	if($this->requereuRelatorioComplexo()) {
	// 		$this->imprimeRelatorioComplexo($conta);
	// 	} else {
	// 		$this->imprimeRelatorioSimples($conta);
	// 	}
	// }

	// protected abstract function requereuRelatorioComplexo(Conta $conta);
	// protected abstract function imprimeRelatorioComplexo(Conta $conta);
	// protected abstract function imprimeRelatorioSimples(Conta $conta);
}