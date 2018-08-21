<?php

require_once 'Relatorio.php';

abstract class TemplateRelatorio implements Relatorio
{

	private $cabecalho;
	private $rodape;
	private $corpo;

	public function imprimeRelatorio(Conta $conta)
	{
		$this->cabecalho = $this->criaCabecalho();
		$this->rodape = $this->criaRodape();
		$this->corpo = $this->criaCorpo($conta);

		$relatorioImpresso = $this->cabecalho.$this->corpo.$this->rodape;
		return $relatorioImpresso;
		
	}

	protected abstract function criaCabecalho();
	protected abstract function criaRodape();
	protected abstract function criaCorpo(Conta $conta);

}