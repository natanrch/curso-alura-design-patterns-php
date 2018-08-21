<?php

class Conta
{
	private $mesDeAbertura;
	private $saldo;

	public function __construct($mesDeAbertura, $saldo)
	{
		$this->mesDeAbertura = $mesDeAbertura;
		$this->saldo = $saldo;
	}

	public function getMesDeAbertura()
	{
		return $this->mesDeAbertura;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}
}