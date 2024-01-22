<?php
//CLASSE MAE

class Veiculos {
    public $cor,
    $modelo,
    $placa,
    $ano,
    $tipo,
    $fabricante;

    public function sobre(){
        return "{$this->modelo} | cor: {$this->cor} | placa: {$this->placa} | fabricante: {$this->fabricante} | ano: {$this->ano} <br>";
    }
}


class VeiculoPasseio extends Veiculos {
    public $banco,
    $lugar,
    $cambio;

    public function passeio(){
        return "Esse carro é de passeio por que tem banco de {$this->banco}, {$this->cambio}, e {$this->lugar} <br>";
    }
}

$passeio = new VeiculoPasseio();
$passeio->cor = "preto";
$passeio->modelo = "Zafira";
$passeio->placa = "air-1234";
$passeio->ano = "1985";
$passeio->tipo = "passeio";
$passeio->fabricante = "FORD";
$passeio->banco = "couro";
$passeio->lugar = "7 lugares";
$passeio->cambio = "automático";

echo "{$passeio->sobre()} {$passeio->passeio()}";

class VeiculoCarga extends Veiculos {
    public $capacidade,
    $peso;

    public function carga(){
        return "Esse veículo é de carga pois aguenta {$this->capacidade}, e pesa {$this->peso}<br>";
    }
}

$carga = new VeiculoCarga();
$carga->cor = "prata";
$carga->modelo = "caminhonete";
$carga->placa = "afr-2075";
$carga->ano = "1999";
$carga->tipo = "carga";
$carga->fabricante = "mercedes";
$carga->capacidade = "2 toneladas";
$carga->peso = "1 tonelada";

echo "{$carga->sobre()} {$carga->carga()}";

class VeiculoCorrida extends Veiculos {
    public $velocidade,
    $aerofolio;

    public function Corrida(){
        return "Esse carro é de corrida por que chega a {$this->velocidade} e {$this->aerofolio}<br>";
    }
}

$velocidade = new VeiculoCorrida();
$velocidade->cor = "vermelho";
$velocidade->modelo = "Huracon";
$velocidade->placa = "fer-1098";
$velocidade->ano = "2010";
$velocidade->tipo = "velocidade";
$velocidade->fabricante = "lamborguini";
$velocidade->velocidade = "300km/h";
$velocidade->aerofolio = "tem aerofólio";

echo "{$velocidade->sobre()} {$velocidade->Corrida()}";