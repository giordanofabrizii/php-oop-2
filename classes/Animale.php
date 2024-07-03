<?php 

class Animale {
    private $icon;
    private $animal;

    public function __construct($animal, $icon) {
        $this->animal = $animal;
        $this->icon = $icon;
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
