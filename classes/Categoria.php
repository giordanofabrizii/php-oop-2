<?php 

class Categoria {
    private $animal;

    public function __construct($animal) {
        $this->animal = $animal;
    }

    /**
     * return the animal parameter
     *
     * @return string
     */
    public function getAnimal(){
        return this->animal;
    }
}
