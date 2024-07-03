<?php 

class Gioco {
    private $nome;
    private $prezzo;
    private $caratteristiche;
    private $ingredienti;

    public function __construct($nome, $prezzo, $caratteristiche, $ingredienti) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->caratteristiche = $caratteristiche;
        $this->ingredienti = $ingredienti;
    }
}