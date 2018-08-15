<?php

require_once "Desconto500Reais.php";

class Desconto500Reais implements Desconto {

  private $proximoDesconto;

  public function setProximo(Desconto $proximo)
  {
    $this->proximoDesconto = $proximo;
  }

  public function desconta(Orcamento $orcamento) {
    if($orcamento->getValor() > 500) {
      return $orcamento->getValor() * 0.07;
    }
    else {
      return $this->proximoDesconto->desconta($orcamento);
    }
  }
}