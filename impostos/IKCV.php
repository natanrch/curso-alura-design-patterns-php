<?php

require_once 'Imposto.php';
require_once 'TemplateDeImpostoCondicional.php';

class IKCV extends TemplateDeImpostoCondicional
{

	public function __construct(Imposto $outroImposto = null)
	{
		parent::__construct($outroImposto);
	}

	public function deveUsarMaximaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() >= 500 && $this->temItemMaiorQue100Reais($orcamento);
	}

	public function maximaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.10;
	}

	public function minimaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.05;
	}

	private function temItemMaiorQue100Reais(Orcamento $orcamento)
	{
		foreach ($orcamento->getItens() as $item) {
			if($item->getValor() > 100) {
				return true;
			}
		}

		return false;
	}
}