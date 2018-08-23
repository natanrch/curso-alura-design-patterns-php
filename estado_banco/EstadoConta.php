<?php

interface EstadoConta
{
	public function descontaDeposito($valor);
	public function autorizaSaque();
}