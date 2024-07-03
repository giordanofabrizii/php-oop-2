<?php 

class Cibo {
    private $nome;
    private $prezzo;
    private $peso;
    private $ingredienti;

    public function __construct($nome, $prezzo, $peso, $ingredienti) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }
}