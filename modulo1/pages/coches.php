<?php


class Coche{

    public $modelo;
    public $color;
    public $precio;

    public function crearCoche(){
        
        return "el modelo ".$this->modelo ." viene con el color ".$this->color." con un valor de ".$this->precio; 
        
    }
}

    $masda = new Coche();
    $masda ->modelo = 'Masda 323';
    $masda ->color = 'negro';
    $masda ->precio =  10000;

    echo $masda->crearCoche();









?>