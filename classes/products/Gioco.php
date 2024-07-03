<?php 

class Gioco extends Prodotto {
    private $caratteristiche;
    private $dimensioni;

    public function __construct($animale, $nome, $prezzo, $foto, $caratteristiche, $dimensioni) {
        parent::__construct($animale, $nome, $prezzo, $foto);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }

    /**
     * Return the caratteristiche of the product
     *
     * @return string
     */
    public function getCaratteristiche(){
        return $this->caratteristiche;
    }

    /**
     * Return the dimensioni of the product
     *
     * @return string
     */
    public function getDimensioni(){
        return $this->dimensioni;
    }
}