<?php

require_once 'Imposto.php';
require_once 'TemplateDeImpostoCondicional.php';

class IHIT extends TemplateDeImpostoCondicional
{

	public function __construct(Imposto $outroImposto = null)
	{
		parent::__construct($outroImposto);
	}

	private $itensNoOrcamento = array();

	public function deveUsarMaximaTaxacao(Orcamento $orcamento)
	{
		return $this->tem2ItensComMesmoNome($orcamento);
	}

	public function maximaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.13 + 100;
	}

	public function minimaTaxacao(Orcamento $orcamento)
	{
		return $orcamento->getValor() * 0.01 * count($orcamento->getItens());
	}

	private function tem2ItensComMesmoNome(Orcamento $orcamento)
	{
		foreach ($orcamento->getItens() as $item) {
			if(in_array($item->getNome(), $this->itensNoOrcamento)) {
				return true;
			} else {
				$this->itensNoOrcamento[] = $item->getNome();
			}
		}
		return false;
	}
}