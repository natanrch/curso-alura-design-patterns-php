<?php

require_once 'TemplateRelatorio.php';
require_once 'Conta.php';

class RelatorioComplexo extends TemplateRelatorio
{
	public function criaCabecalho()
	{
		return 'Banco Ximira e Peixola <br>Endereço: na casa do caralho esquina com puta que pariu<br>Telefone: (10)6666-8888<br>';
	}

	public function criaRodape()
	{
		return 'e-mail: conta@ximiraepeixola.com<br>Data: 20/08/2018';
		//não vou mexer com DateTime() agora
	}

	public function criaCorpo(Conta $conta)
	{
		return 'Titular: '.$conta->getTitular().'<br>Agência: '$conta->getAgencia().'<br>Numero: '.$conta->getNumero().'<br> Saldo: '.$conta->getSaldo().'<br>';
	}
}