<?php

class Aluno extends Pessoa {

    private $curso;
    private $matr;

    public function __construct($nome, $idade, $sexo)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->matr = true;    
    }
    
    public function cancelarMatr() {
        if ($this->matr === true ) {
            $this->matr = false;
        }
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of matr
     */ 
    public function getMatr()
    {
        return $this->matr;
    }

    /**
     * Set the value of matr
     *
     * @return  self
     */ 
    public function setMatr($matr)
    {
        $this->matr = $matr;

        return $this;
    }
}