<?php
require_once 'TemplateRelatorio.php';

class RelatorioSimples extends TemplateRelatorio
{
	public function criaCabecalho()
	{
		return 'Banco Ximira e Peixola <br>Telefone: (10)6666-8888<br>';
	}

	public function criaRodape()
	{
		return 'Banco Ximira e Peixola <br>Telefone: (10)6666-8888<br>';
		//não vou mexer com DateTime() agora
	}

	public function criaCorpo(Conta $conta)
	{
		return 'Titular: '.$conta->getTitular().'<br> Saldo: '.$conta->getSaldo().'<br>';
	}
}