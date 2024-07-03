<?php 

class Accessorio extends Prodotto {
    private $materiale;
    private $dimensioni;

    public function __construct($animale, $nome, $prezzo, $foto, $materiale, $dimensioni) {
        parent::__construct($animale, $nome, $prezzo, $foto);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }

    /**
     * Return the materiale of the product
     *
     * @return string
     */
    public function getMateriale(){
        return $this->materiale;
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