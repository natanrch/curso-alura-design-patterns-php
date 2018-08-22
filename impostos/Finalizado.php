<?php

require_once 'EstadoDeUmOrcamento.php';

class Finalizado implements EstadoDeUmOrcamento
{
	public function aplicaDescontoExtra(Orcamento $orcamento)
	{
		throw new Exception("Orçamentos já está finalizado!");
	}

	public function aprova(Orcamento $orcamento)
	{
		throw new Exception("Orçamentos já está finalizado!");
	}

	public function reprova(Orcamento $orcamento)
	{
		throw new Exception("Orçamentos já está finalizado!");
	}

	public function finaliza(Orcamento $orcamento)
	{
		throw new Exception("Orçamentos já está finalizado!");
	}
}