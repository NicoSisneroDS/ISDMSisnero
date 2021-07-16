<?php
class alumno{
    //ATRIBUTOS
    public $nombre;
    public $apellido;
    public $dni;

    //METODOS
    function __construct($a, $n, $d){
        $this->apellido = $a;
        $this->nombre = $n;
        $this->dni = $d;
    }
    //GETTERS con validaciones basicas.
    function getterApellidoAlum(){
        if(strlen($this->apellido) < 4 || is_numeric($this->apellido)){
            echo 'Error: Su apellido debe tener mas de cuatro caracteres o es un numero.';
        }else{
            return $this->apellido;
        }
    }
    function getterNombreAlum(){
        if(strlen($this->nombre) < 4 || is_numeric($this->nombre)){
            echo 'Error: Su nombre debe tener mas de cuatro caracteres o es un numero.';
        }else{ 
            return $this->nombre;
        }
    }
    function getterDNIAlum(){
        if(strlen($this->dni) > 8 || !is_numeric($this->dni)){
            echo 'Error: su DNI tiene que ser un numero o tener menos de 9 digitos.';
        }else{
            return $this->dni;
        }
    }
}
?>