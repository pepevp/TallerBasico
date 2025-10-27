<?php

class Coche{
    public $marca;
    public $modelo;
    public $año;

    public function __construct($miMarca, $miModelo, $miAño){
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->año = $miAño;
    }

    public function acelerar(){
        echo "El coche está acelerando.";
    }

}   

class Eletrodomestico{
    public $nombre;
    public $precio;

}

class Lavadora extends Eletrodomestico{

    public function __construct($miNombre, $miPrecio, $miCapacidad){
        $this->nombre = $miNombre;
        $this->precio = $miPrecio;
        $this->capacidad = $miCapacidad;
    }

    public function lavar(){
        echo "La lavadora está lavando la ropa.";
    }
}

class Animal{

    public function hacerRuido(){

    }
}

class Gato{
    public function hacerRuido(){
        echo "El gato maulla.";
    }
}




    $oCoche = new Coche("Toyota", "Corolla", 2020);
    $oCoche->acelerar();
    echo "<br>";

    $oLavadora = new Lavadora("LG", 500, "7kg");
    $oLavadora->lavar();
    echo "<br>";

    $oGato = new Gato();
    $oGato->hacerRuido();