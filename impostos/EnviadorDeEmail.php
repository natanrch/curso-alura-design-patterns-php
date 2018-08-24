<?php

class EnviadorDeEmail implements AcoesAposGerarNF
{
	public function executa(NotaFiscal $notaFiscal)
	{
		echo 'E-mail enviado<br>';
	}
}