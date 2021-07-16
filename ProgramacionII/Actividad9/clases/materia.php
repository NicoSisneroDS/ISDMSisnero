<?php
require_once('clases/alumnos.php');
require_once('clases/profesor.php');
require_once('clases/legajo.php');

class materia{
    //ATRIBUTOS
    public $nombremat;
    public $profenc;
    public $legajos;
    //METODOS
    function __construct($nm){
        $this->nombremat = $nm;
    }

    //Setter y Getter del profesor de la materia.
    function setterProfesorEncargado($ap, $np){
        $this->profenc = new profesor($ap, $np);
    }

    function getterNombreMateria(){
        return $this->nombremat;
    }

    function getterApProfesorEnc(){
        return $this->profenc->getterApellidoProf();
    }

    function getterNomProfesorEnc(){
        return $this->profenc->getterNombreProf();
    }


    //AGREGAR Y MOSTRAR DATOS DE ALUMNOS INSCRIPTOS.
    function AgregarAlumnoALegajo($aa,$na,$dnia){
        $this->legajos = new legajo($aa,$na,$dnia);
    }

    function datosAlumno(){
        echo $this->legajos->getterApAlumno().' ';
        echo $this->legajos->getterNomAlumno().' ';
        echo $this->legajos->getterDNIAlumno();
    }

    //AGREGAR Y MOSTRAR NOTAS Y SITUACION DEL ALUMNOS INSCRIPTOS.
    function AgregarNotasALegajo($n){
        $this->legajos->setterNotas($n);
    }

    function mostrarNotasDelLegajo(){
        echo $this->legajos->getterNotas();
    }

    //RETORNO LISTAS

    //TERMINAR DE VER SEPARAR LISTAS REGULARES O NO
    function RetornarListaRegularizados(){
        echo $this->legajos->situacion();
        
    }
    
    function RetornarListaPromocionados(){
        echo $this->legajos->situacion();

    }

    function CalcularPromedio(){

    }

    function TomarExamen(){

    }

}






?>