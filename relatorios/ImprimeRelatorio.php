<?php

require_once 'Relatorio.php';
require_once 'Conta.php';

class imprimeRelatorio
{
	public function imprimeRelatorio (Relatorio $relatorio, Conta $conta)
	{
		$relatorioImpresso = $relatorio->imprimeRelatorio($conta);
		echo $relatorioImpresso;
	}
}