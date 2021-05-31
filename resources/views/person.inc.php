<?php

class Person {
    // Properties
    public $name;
    public $eyecolor;
    public $age;

    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}    

Class Vervoerders{
    public $naam;
    public $contactpersoon;
    public $tel;
    public $plaats;

    public function __construct($naam, $contactpersoon, $tel, $plaats){
        $this->naam = $naam;
        $this->contactpersoon = $contactpersoon;
        $this->tel = $tel;
        $this->plaats = $plaats;
    }

    public function get_naam(){
        return $this->naam;
    }
    public function get_contactpersoon(){
        return $this->contactpersoon;
    }
    public function get_tel(){
        return $this->tel;
    }
    public function get_plaats(){
        return $this->plaats;
    }

    public function get_everything(){
    }
    
    
}

Class Boodschappen{
    public $naam;
    public $prijs;

    public function __construct($naam, $prijs){
        $this->naam = $naam;
        $this->prijs = $prijs;
    }

    public function GetPrice(){
        return $this->prijs;
    }
}

