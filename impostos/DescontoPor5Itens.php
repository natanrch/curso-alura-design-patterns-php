<?php

require_once "Desconto.php";

class DescontoPor5Itens implements Desconto {

  private $proximoDesconto;

  public function setProximo(Desconto $proximo)
  {
    $this->proximoDesconto = $proximo;
  }

  public function desconta(Orcamento $orcamento) {
    if(count($orcamento->getItens()) >= 5) {
      return $orcamento->getValor() * 0.1;
    }
    else {
      return $this->proximoDesconto->desconta($orcamento);
    }
  }
}