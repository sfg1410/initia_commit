<?php
class Saludo{

    private $saludo;
    function __construct($name)
    {
        $this->saludo = "hola $name";

    }
    function saludar(){
        echo $this->saludo;
    }


}