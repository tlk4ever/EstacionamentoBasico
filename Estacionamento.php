<?php

class Estacionamento {

    private $veiculo;
    private $entrada;
    private $posicao;
    private $saida;
    private $tempo;
    private  $valor;

    public function __construct ($veiculo, $entrada, $posicao, $saida){
        $this->veiculo = $veiculo;
        $this->entrada = $entrada;
        $this->saida = $saida;
        $this->posicao = $posicao;
    }

    /**
     * Get the value of veiculo
     */ 
    public function getVeiculo()
    {
        return $this->veiculo;
    }

    /**
     * Set the value of veiculo
     *
     * @return  self
     */ 
    public function setVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;

        return $this;
    }

    /**
     * Get the value of entrada
     */ 
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * Set the value of entrada
     *
     * @return  self
     */ 
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;

        return $this;
    }

    /**
     * Get the value of posicao
     */ 
    public function getPosicao()
    {
        return $this->posicao;
    }

    /**
     * Set the value of posicao
     *
     * @return  self
     */ 
    public function setPosicao($posicao)
    {
        $this->posicao = $posicao;

        return $this;
    }

    /**
     * Get the value of saida
     */ 
    public function getSaida()
    {
        return $this->saida;
    }

    /**
     * Set the value of saida
     *
     * @return  self
     */ 
    public function setSaida($saida)
    {
        $this->saida = $saida;

        return $this;
    }

    /**
     * Get the value of tempo
     */ 
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set the value of tempo
     *
     * @return  self
     */ 
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}