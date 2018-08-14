<?php

require_once 'Conta.php';

interface Investimento
{
	public function calculaRendimento(Conta $conta);
	//public function calculaImposto();
}