<?php
require "Carro.php";
require "Pessoa.php";

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
