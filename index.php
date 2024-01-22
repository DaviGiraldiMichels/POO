<?php
/* require "Carro.php";
require "Pessoa.php";
require "Autoload.php"; */
use Carro\Carro;
use Pessoa\Pessoa;
use app\pdo\Mysql;




$meuCarro = new Carro();
$meuCarro->modelo = "Megane Grand Tour";
$meuCarro->cor = "Bege";

$meuCarro->getVeiculo();

$outroCarro = new Carro();
$outroCarro->modelo = "ferrari";
$outroCarro->cor = "vermelho";
$outroCarro->getVeiculo();

$meuCarro->getVeiculo();

//classe pessoa
$p1 = new Pessoa("Davi", 17);
$p1->getPessoa();

echo "<p>PDO</p>";

$g = new Mysql();
$g->select("SELECT * FROM pdv_produtos");

foreach($g->qrs as $dados){
    echo $dados["nome"]."<br>";
}

echo "inserir dados";
$g->insert("INSERT INTO pdv_produtos (nome, descricao, valor_venda, valor_compra, unidade, cod_ean, ativo, from_categoria) VALUES ('Cachaça', 'Queima a guela', 4.5, 3.20, 'ML', '123123123123', 1, 5)");