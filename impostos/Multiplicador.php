<?php

class Multiplicador implements AcoesAposGerarNF
{
	private $fator;

	public function __construct($fator)
	{
		$this->fator = $fator;
	}

	public function executa(NotaFiscal $notaFiscal)
	{
		echo 'Valor bruto com multiplicador: '.$notaFiscal->getValorBruto() * $this->fator.'<br>';
	}
}