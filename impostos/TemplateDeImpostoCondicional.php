<?php

require_once 'Imposto.php';

//template design pattern

abstract class TemplateDeImpostoCondicional extends Imposto
{
	public function calcula(Orcamento $orcamento)
	{
		if($this->deveUsarMaximaTaxacao($orcamento)) {
			return $this->maximaTaxacao($orcamento);
		} else {
			return $this->minimaTaxacao($orcamento);
		}
	}

	protected abstract function deveUsarMaximaTaxacao(Orcamento $orcamento);
	protected abstract function maximaTaxacao(Orcamento $orcamento);
	protected abstract function minimaTaxacao(Orcamento $orcamento);
}