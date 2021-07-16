<?php
require_once('clases/alumnos.php');

class legajo{
    //ATRIBUTOS
    public $alumno;
    public $condicion;
    public $notas = array(null,); //null para que el key '0' del array no exista, y se pueda realizar el conteo de materias desde 1.
    //METODOS
    function __construct($a,$n,$dni){
        $this->alumno = new alumno($a,$n,$dni);
    }


    //SITUACION
    function situacion(){
        $suma = array_sum($this->notas);
        $div = array_key_last($this->notas);
        if($suma / $div >= 7){
            echo $this->condicion = 'Promocionado';
        }elseif($suma / $div >= 4){
            echo $this->condicion = 'Regularizado';
        }else{
            echo $this->condicion = 'Libre';
        }
    }


    //SETTERS NOTAS
    function setterNotas($nota){
        $this->notas[] = $nota;
    }
    function getterNotas(){
        for ($i=0; $i < count($this->notas); $i++) { 
            echo $this->notas[$i].'-';
        }
    }

    //GETTERS DATOS
    function getterApAlumno(){
        return $this->alumno->getterApellidoAlum();
    }
    function getterNomAlumno(){
        return $this->alumno->getterNombreAlum();
    }
    function getterDNIAlumno(){
        return $this->alumno->getterDNIAlum();
    }

}

?>