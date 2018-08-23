<?php

require_once 'EstadoConta.php';

class EstadoNegativo implements EstadoConta
{
	public function descontaDeposito($valor)
	{
		return $valor - $valor * 0.05;
	}

	public function autorizaSaque()
	{
		return false;
	}
}