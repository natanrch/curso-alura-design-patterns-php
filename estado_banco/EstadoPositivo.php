<?php

require_once 'EstadoConta.php';

class EstadoPositivo implements EstadoConta
{
	public function descontaDeposito($valor)
	{
		return $valor - $valor * 0.02;
	}

	public function autorizaSaque()
	{
		return true;
	}
}