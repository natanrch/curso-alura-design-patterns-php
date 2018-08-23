<?php

class Conta
{
	private $nome;
	private $saldo;
	private $estado;

	public function __construct($nome, $saldo)
	{
		$this->nome = $nome;
		$this->saldo = $saldo;
		$this->deduzEstado();
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function deposita($valor)
	{
		$valor = $this->estado->descontaDeposito($valor);
		$this->saldo += $valor;
		$this->deduzEstado();
	}

	public function saca($valor)
	{
		if($this->estado->autorizaSaque()) {
			$this->saldo -= $valor;
		} else {
			throw new Exception ("Não é possível realizar o saque de conta com estado negativo");
		}

		$this->deduzEstado();
	}

	private function deduzEstado()
	{
		if($this->saldo > 0) {
			$this->estado = new EstadoPositivo;
		} else {
			$this->estado = new EstadoNegativo;
		}
	}
}