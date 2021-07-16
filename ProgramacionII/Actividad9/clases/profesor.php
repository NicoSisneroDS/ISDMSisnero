<?php

class profesor{
    //ATRIBUTOS
    public $nombre;
    public $apellido;
    //METODOS
    function __construct($a, $n){
        $this->apellido = $a;
        $this->nombre = $n;
    }  

    //GETTERS con validaciones basicas.
    function getterApellidoProf(){
        if(strlen($this->apellido) < 4 || is_numeric($this->apellido)){
            echo 'Error: Su apellido debe tener mas de cuatro caracteres o es un numero.';
        }else{
            return $this->apellido;
        }
    }
    function getterNombreProf(){
        if(strlen($this->nombre) < 4 || is_numeric($this->nombre)){
            echo 'Error: Su nombre debe tener mas de cuatro caracteres o es un numero.';
        }else{ 
            return $this->nombre;
        }
    }
}
?>