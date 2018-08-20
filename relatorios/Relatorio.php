<?php

require_once 'Conta.php';

interface Relatorio
{
	public function imprimeRelatorio(Conta $conta);
}