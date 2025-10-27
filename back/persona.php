<?php

class Persona{
    public $nombre;
    public $apellido1;
    public $edad;

    public function __construct($miNombre, $miApellido1, $miApellido2, $miEdad){
        $this->nombre = $miNombre;
        $this->apellido1 = $miApellido1;
        $this->apellido2 = $miApellido2;
        $this->edad = $miEdad;
    }

    public function saludar(){
        echo "Hola, mi nombre es " . $this->nombre . " " . $this->apellido1 . " " . $this->apellido2 . " y tengo " . $this->edad . " años.";
    }

}

class Alumno extends Persona{
    public $numeroCarnet;

    public function __construct($miNombre, $miApellido1, $miApellido2, $miEdad, $miCarnet){
        parent::__construct($miNombre, $miApellido1, $miApellido2, $miEdad);
        $this->numeroCarnet = $miCarnet;
    }

    public function saludar(){
        echo "Hola, soy el alumno " . $this->nombre . " " . $this->apellido1 . " " . $this->apellido2 . ", tengo " . $this->edad . " años y mi número de carné es " . $this->numeroCarnet . ".";
    }
}

    $oPersona = new Persona("Juan", "Pérez", "González", 30);
    $oPersona->saludar();
    echo "<br>";

    $oAlumno = new Alumno("María", "López", "Martínez", 22, "B654321");
    $oAlumno->saludar();


?>