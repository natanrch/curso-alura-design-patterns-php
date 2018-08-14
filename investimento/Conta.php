<?php

class Conta
{
	private $saldo;
	public function __construct($saldo)
	{
		$this->saldo = $saldo;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}
}