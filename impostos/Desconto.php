<?php

//Chain of responsability Design Pattern

interface Desconto
{
	public function desconta(Orcamento $orcamento);
	public function setProximo(Desconto $desconto);
}