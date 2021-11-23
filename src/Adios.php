<?php

class Adios{
    private $despedida;
    function __construct($name)
    {
            $this->despedida="Adios $name";     
    }
    function despedida(){
        echo $this->despedida;
    }
}