<?php 

class Accessorio extends Prodotto {
    private $materiale;
    private $dimensioni;

    public function __construct($animale, $nome, $prezzo, $foto, $materiale, $dimensioni) {
        parent::__construct($animale, $nome, $prezzo);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }
}