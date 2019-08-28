<?php

class Funcionario extends Pessoa {

    private $setor;
    private $trabalhando;

    public function __construct($nome, $idade, $sexo)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->trabalhando = true;
    }

    public function mudarTrabalho($descricao) {
        if ($this->setor !== $descricao) {
            $this->setor = $descricao;
        }
    }

    /**
     * Get the value of setor
     */ 
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */ 
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */ 
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     *
     * @return  self
     */ 
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}