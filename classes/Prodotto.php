<?php 

class Prodotto {
    private $animale;
    private $nome;
    private $prezzo;
    private $foto;
    public static $instances = [];

    public function __construct($animale, $nome, $prezzo, $foto) {
        $this->animale = $animale;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->foto = $foto;
        self::$instances[] = $this;
    }
    
    /**
     * Return the animal name of the product
     *
     * @return string
     */
    public function getAnimale(){
        return $this->animale;
    }

    /**
     * Return the name of the product
     *
     * @return string
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * Return the prezzo of the product
     *
     * @return string
     */
    public function getPrezzo(){
        return $this->prezzo;
    }

    /**
     * Return the foto of the product
     *
     * @return string
     */
    public function getFoto(){
        return $this->foto;
    }

    public static function all() {
        return self::$instances;
    }
}