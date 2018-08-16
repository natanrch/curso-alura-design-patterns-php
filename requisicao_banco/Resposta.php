<?php

interface Resposta
{
	public function responde(Requsicicao $req, Conta $conta);
	public function setProxima(Resposta $resposta);
}