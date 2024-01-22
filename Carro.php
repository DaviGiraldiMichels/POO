<?php
namespace Carro;

class Carro{
    //atributos dos carros; informações sobre o veículo
    public $modelo,
    $cor,
    $motor,
    $fabricante,
    $ano,
    $combustivel = "Gasolina",
    $portas,
    $velocidade,
    $quilometragem;

    //metodos; funções do veículo
    public function andar(){
        echo "Andando a {$this->velocidade}";
    }

    public function getVeiculo(){
        echo <<<HTML
        <p>{$this->modelo}</p>
        <p>{$this->cor}</p>
        HTML;
    }

}