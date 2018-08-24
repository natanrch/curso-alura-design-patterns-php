<?php

class NotaFiscalBuilder {


	private $razaoSocial;
	private $cnpj;
	private $dataDeEmissao;
	private $valorBruto;
	private $impostos;
	private $itens;
	private $observacoes;
	private $acoesParaExecutar;

	public function __construct()
	{
		$this->itens = array();
		$this->valorBruto = 0;
		$this->impostos = 0;
		$this->acoesParaExecutar = array();
	}

	public function addAcao(AcoesAposGerarNF $acao)
	{
		$this->acoesParaExecutar[] = $acao;
	}

	public function paraEmpresa($razaoSocial)
	{
		$this->razaoSocial = $razaoSocial;
	}

	public function comCnpj($cnpj)
	{
		$this->cnpj = $cnpj;
	}

	public function comItem(Item $item)
	{
		$this->itens[] = $item;
		$this->valorBruto += $item->getValor();
		$this->impostos += $item->getValor() * 0.05;
	}

	public function comObservacao($observacao)
	{
		$this->observacoes = $observacao;
	}

	public function comDataDeEmissao($dataDeEmissao = null)
	{
		if(is_null($dataDeEmissao)) {
			$this->dataDeEmissao = date("Y-m-d h:i:s");
		} else {
			$this->dataDeEmissao = $dataDeEmissao;
		}
	}

	public function build()
	{
		$nf = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->dataDeEmissao, $this->valorBruto, $this->impostos, $this->itens, $this->observacoes);
		foreach ($this->acoesParaExecutar as $acao) {
			$acao->executa($nf);
		}
		return $nf;
	}
}