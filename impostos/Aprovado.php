<?php

require_once 'EstadoDeUmOrcamento.php';

class Aprovado implements EstadoDeUmOrcamento
{
	public function aplicaDescontoExtra(Orcamento $orcamento)
	{
		$valor = $orcamento->getValor();
		$orcamento->setValor($valor - $valor * 0.02);
	}

	public function aprova(Orcamento $orcamento)
	{
		throw new Exception("Orcamento já está aprovado");
	}

	public function reprova(Orcamento $orcamento)
	{
		throw new Exception("Impossível reprovar um orcamento já aprovado");
	}

	public function finaliza(Orcamento $orcamento)
	{
		$orcamento->setEstado(new Finalizado);
	}
}