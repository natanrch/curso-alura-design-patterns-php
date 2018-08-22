<?php

require_once 'EstadoDeUmOrcamento.php';

class EmAprovacao implements EstadoDeUmOrcamento
{
	public function aplicaDescontoExtra(Orcamento $orcamento)
	{
		$valor = $orcamento->getValor();
		$orcamento->setValor($valor - $valor * 0.05);
	}

	public function aprova(Orcamento $orcamento)
	{
		$orcamento->setEstado(new Aprovado);
	}

	public function reprova(Orcamento $orcamento)
	{
		$orcamento->setEstado(new Reprovado);
	}

	public function finaliza(Orcamento $orcamento)
	{
		throw new Exception("Impossível finalizar um orcamento em aprovação");
	}
}