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

    public static function all() {
        return self::$instances;
    }
}