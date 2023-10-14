<?php

class Personnage {

    // public est la visibilité de la variable
    private $vie = 80;
    public $atk = 20;
    public $nom;




    public function __construct($nom)
    {
        $this->nom = $nom;
    }


    // les méthodes 

    public function crier() {
        echo 'LEEROY JENKINS';
    }


    public function regenerer($vie = null) {
        if (is_null($vie)) {
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
    }


    public function mort(){
        return ($this->vie < 1) ? true : false; 
    }
    
    private function empecher_negatif(){
        if($this->vie < 0) {
            $this->vie = 0;
        }
    }



    public function attaque($cible) {
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }




    public function getVie () {
        return $this->vie;
    }

}