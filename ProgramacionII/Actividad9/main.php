<?php
//Llamada a los otros archivos php.
require_once('clases/alumnos.php');
require_once('clases/profesor.php');
require_once('clases/materia.php');
require_once('clases/legajo.php');
require_once('clases/otros/extras.php');
require_once('clases/otros/tabla.php');

//Instaciacion

// $legajo1 = new legajo('Nico','Sisnero','12312312');
//     echo $legajo1->getterNomAlumno();
//     echo $legajo1->getterApAlumno().saltolinea();
//     echo $legajo1->getterDNIAlumno().saltolinea();
//     echo saltolinea();
//     $legajo1->setterNotas('7');
//     $legajo1->setterNotas('3');
//     $legajo1->setterNotas('3');
//     $legajo1->setterNotas('3');
//     $legajo1->situacion();
//     $legajo1->getterSituacion();

//MATEMATICAS
$materia = new materia('Matematicas');
    $materia->setterProfesorEncargado('Salah','Alberto');
    echo 'MATERIA: ' . $materia->getterNombreMateria();
    echo 'PROFESOR: ' . $materia->getterApProfesorEnc().', '.$materia->getterNomProfesorEnc().saltolinea();
    echo 'Listado de alumnos inscriptos: '.saltolinea();
    echo saltolinea();
    $materia->AgregarAlumnoALegajo('Nicolas','Sisnero','41121556').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Araceli','Goytea','39676241').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Francisco','Sisnero','12345678').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Lucas','de Bien','87654321').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Humberto','de Bien','23456789').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Jose','Sisnero','98765432').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Elizabeth','Parra','15975312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Valeria','Quiroga','21357951').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Aldana','Quiroga','12378945').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Agustina','Goytea','54987321').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Fernando','Goytea','12318312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Santiago','Goytea','12342312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Efra','Rolon','12312312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Vanina','Goytea','12312632').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Priscila','Goytea','12318312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Aldana','Goytea','12342312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Abril','Goytea','12312312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Miguel','Sisnero','12312632').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Kike','Sisnero','12318312').$materia->datosAlumno().saltolinea();
    $materia->AgregarAlumnoALegajo('Lobo','Sisnero','12342312').$materia->datosAlumno().saltolinea();
    $materia->AgregarNotasALegajo('3').$materia->AgregarNotasALegajo('7').$materia->AgregarNotasALegajo('3').$materia->mostrarNotasDelLegajo();
?>