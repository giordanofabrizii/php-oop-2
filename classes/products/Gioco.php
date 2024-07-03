<?php 

class Gioco extends Prodotto {
    private $caratteristiche;
    private $dimensioni;

    public function __construct($animale, $nome, $prezzo, $foto, $caratteristiche, $dimensioni) {
        parent::__construct($animale, $nome, $foto, $prezzo);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }
}