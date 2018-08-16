<?php

require_once 'Desconto.php';

class DescontoPorVendaCasada implements Desconto
{
	private $proximoDesconto;

	public function setProximo(Desconto $proximo)
	{
	  $this->proximoDesconto = $proximo;
	}

	public function desconta(Orcamento $orcamento)
	{
		if($this->existe('LAPIS', $orcamento) && $this->existe('CANETA', $orcamento)) {
			return $orcamento->getValor() * 0.05;
		} else {
			return $this->proximoDesconto->desconta($orcamento);
		}
	}

	private function existe($nomeDoItem, Orcamento $orcamento)
	{
		foreach ($orcamento->getItens() as $item) {
			if($item->getNome() == $nomeDoItem) {
				return true;
			}
		}
		return false;
	}
}