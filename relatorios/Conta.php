<?php

class Conta
{
	private $titular;
	private $numero;
	private $agencia;
	private $saldo;

	public function __construct($titular, $numero, $agencia, $saldo)
	{
		$this->titular = $titular;
		$this->numero = $numero;
		$this->agencia = $agencia;
		$this->saldo = $saldo;
	}

	public function getTitular()
	{
		return $this->titular;
	}

	public function getNumero()
	{
		return $this->numero;
	}

	public function getAgencia()
	{
		return $this->agencia;
	}

	public function getSaldo()
	{
		return $this->saldo();
	}
}