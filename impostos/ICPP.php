<?php

require_once 'Imposto.php';
require_once 'TemplateDeImpostoCondicional.php';

class ICPP extends TemplateDeImpostoCondicional
{
	public function deveUsarMaximaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() >= 500;
	}

	public function maximaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.07;
	}

	public function minimaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.05;
	}
}