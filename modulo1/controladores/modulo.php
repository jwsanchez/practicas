<?php
class Persona{
    public $nombreCompleto;
    public $edad;
    public $color;

    public function __construct($nombreCompleto, $edad, $color){
        $this->nombreCompleto = $nombreCompleto;
        $this->edad = $edad;
        $this->color = $color;
        
    }
    
    public function crearPersona(){
        return "Hola Bienvenido seas $this->nombreCompleto, tu edad es $this->edad y eres de tes $this->color";
    }
}

$jesus = new Persona('Jesus', 24, 'morena');
echo $jesus -> crearPersona();


?>