<?php

class Requisicao
{
	private $formato;

	public function __construct($formato)
	{
		$this->formato = $formato;
	}

	public function getFormato()
	{
		return $this->formato;
	}
}