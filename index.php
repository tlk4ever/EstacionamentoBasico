<?php

require_once 'Estacionamento.php';
require_once 'Veiculo.php';
require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro('Preto', 'AAA8888', 'Ford', 'Fiesta');
$estacionamentoCarro = new Estacionamento($carro, '27-07-2019 12:00:00', 1,'27-07-2019 13:00:00');

$moto = new Moto('Vermelho', 'BBB1111', 'Honda', 'CG Titan');
$estacionamentoMoto = new Estacionamento($moto, '27-07-2019 12:30:00', 1,'27-07-2019 14:40:00');

var_dump($estacionamentoCarro, $estacionamentoMoto);
