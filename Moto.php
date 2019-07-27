<?php

class Moto extends \Veiculo {

    protected $tipo = 'Noto';

    public function __construct($cor, $placa, $marca,$modelo)
    {
        parent::__construct($cor, $placa, $marca,$modelo);
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}