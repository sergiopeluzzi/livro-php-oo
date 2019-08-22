<?php

require_once "PublicacaoInterface.php";

class Livro implements PublicacaoInterface {

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes() {
        echo "<hr>Livro: " . $this->titulo;
        echo "<br>Escrito por: " . $this->autor;
        echo "<br>Sendo lido por: " . $this->leitor->getNome();
        echo "<br>Leitor tem " . $this->leitor->getIdade() . " anos";
        echo "<br>Leitor é do sexo: " . $this->leitor->getSexo(); 
        echo "<br>Total de Páginas: " . $this->totPaginas;
        echo "<br>Página Atual: " . $this->pagAtual;
    }

    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = true;
        $this->pagAtual = 0;
    }

    /** Metodos getters & setter */
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
        return $this;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
        return $this;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
        return $this;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
        return $this;
    }

    /** Metodos da Interface */
    public function abrir() {
        $this->setAberto(true);
    }
    
    public function fechar() {
        $this->setAberto(false);
    }

    public function folear($p) {
        if($this->totPaginas > $p) {
            $this->setPagAtual($p);
        } else {
            $this->setPagAtual(0);
        }
        
    }

    public function avancarPag() {
        $this->pagAtual++;
    }

    public function voltarPag() {
        $this->pagAtual--;
    }
}