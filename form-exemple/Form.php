<?php
/**
 * Class Form
 * 
 * Permet de générer un formulaire rapidement et simplement
 * 
 */
class Form {

    /**
     * @var array Données utilisées par le formulaire 
     */
    private $data; 

    /**
     * @var string Tag utlisé pour entourer les champs
     */
    public $surround = "p";


    /**
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array()) {
        $this->data = $data;
    }


    /**
     * @param $html  Code HTML à entourer
     * @return string
     */
    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }


    /**
     * @param $index string Index de la valeur à récupérer
     * @return string
     */
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : ""; 
    }


    /**
     * @var $name string
     * @return string
     */
    public function input($name){
       return $this->surround('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @return string 
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
    
}



?>