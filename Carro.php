<?php

class Carro extends \Veiculo {

    protected $tipo = 'Carro';

    public function __construct($cor, $placa, $marca,$modelo)
    {
        parent::__construct($cor, $placa, $marca,$modelo);
    }

    
}