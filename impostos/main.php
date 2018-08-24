<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$item1 = new ItemBuilder();
$item1->comNome('Tijolo');
$item1->comValor(50);

$item2 = new ItemBuilder();
$item2->comNome('Cimento');
$item2->comValor(50);

$notaBuilder = new NotaFiscalBuilder();
$notaBuilder->paraEmpresa('Ximira e Peixola');
$notaBuilder->comCnpj('1122233');
$notaBuilder->comItem($item1->build());
$notaBuilder->comItem($item2->build());
$notaBuilder->comObservacao('Entregar no endereço tal');
$notaBuilder->comDataDeEmissao();

$nota = $notaBuilder->build();
echo '<pre>';
var_dump($nota);


// $orcamento = new Orcamento(1000);

// $orcamento->aplicaDescontoExtra();

// echo $orcamento->getValor().'<br>';

// $orcamento->aprova();
// $orcamento->aplicaDescontoExtra();

// echo $orcamento->getValor().'<br>';

// $orcamento->aplicaDescontoExtra();

// echo $orcamento->getValor();

// $orcamento->finaliza();