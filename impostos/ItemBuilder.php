<?php

class ItemBuilder
{
	private $nome;
	private $valor;

	public function comNome($nome)
	{
		$this->nome = $nome;
	}

	public function comValor($valor)
	{
		$this->valor = $valor;
	}

	public function build()
	{
		return new Item($this->nome, $this->valor);
	}
}