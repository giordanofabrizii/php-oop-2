<?php 

class Animale {
    private $icon;
    private $species;

    public function __construct($icon, $species) {
        $this->icon = $icon;
        $this->species = $species;
    }

    /**
     * Return the icon classes of the animal
     *
     * @return string
     */
    public function getIcon(){
        return $this->icon;
    }

    /**
     * Return the species of the animal
     *
     * @return string
     */
    public function getSpecies(){
        return $this->species;
    }
}
