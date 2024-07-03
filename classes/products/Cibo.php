<?php 

class Cibo extends Prodotto {
    private $peso;
    private $ingredienti;

    public function __construct($animale, $nome, $prezzo, $foto, $peso, $ingredienti) {
        parent::__construct($animale, $nome, $prezzo);
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }
}