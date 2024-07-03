<?php 

class Cibo extends Prodotto {
    private $peso;
    private $ingredienti;

    public function __construct($animale, $nome, $prezzo, $foto, $peso, $ingredienti) {
        parent::__construct($animale, $nome, $prezzo, $foto);
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }

    /**
     * Return the peso of the product
     *
     * @return string
     */
    public function getPeso(){
        return $this->peso;
    }

    /**
     * Return the ingredienti of the product
     *
     * @return string
     */
    public function getIngredienti(){
        return $this->ingredienti;
    }
}