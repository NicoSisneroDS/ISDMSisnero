<?php
//Llamada a los otros archivos php.
require_once('clases/alumnos.php');
require_once('clases/profesor.php');
require_once('clases/materia.php');
require_once('clases/legajo.php');
require_once('clases/otros/extras.php');


//EXPLICACION:
//Yo lo entendi de la siguiente manera: por cada materia que exista, es que se designa un profesor y se le agrega alumnos acompañado de
//legajos, por lo tanto, por cada materia tiene un profesor designado y puede tener X legajos, y esos legajos representa la situacion
//en la que se encuentra el alumno, en donde tiene almacenada todas sus notas y sus datos correspondientes.


//INSTANCIACION:
    //* Instanciar 3 profesores   
    //* Instanciar 4 materias   
    //* Instanciar 20 alumnos   
    //* Agregar al menos 6 legajos a cada materia   
    //* Tomar examen a dos alumnos de una materia 
    //* Regularizar un alumno de una materia   (REGULARIZACION O SITUACION AUTOMATICA POR LAS NOTAS QUE TIENE.)
    //* Retornar la lista de alumnos regulares de una materia   


    //Cuatro(4) materias:
$materia1 = new materia('Matematicas');
$materia2 = new materia('Programacion');
$materia3 = new materia('Ingles');
$materia4 = new materia('Estadistica');

    //Tres(3) profesores:
$profesor1 = new profesor('Flores','Cinthia');
$profesor2 = new profesor('Gonzales','Jesus');
$profesor3 = new profesor('Sanchez','Noelia');

    //Veinte(20) alumnos:
$alumno1 = new alumno('Sisnero','Nicolas','41121556');
$alumno2 = new alumno('Goytea','Araceli','12345678');
$alumno3 = new alumno('Sisnero','Franciasco','12312312');
$alumno4 = new alumno('de Bien','Lucas','87654321');
$alumno5 = new alumno('Quiroga','Aldana','23456789');
$alumno6 = new alumno('Catalan','Cecilia','98765432');
$alumno7 = new alumno('Quiroga','Valeria','15615615');
$alumno8 = new alumno('de Bien','Humberto','15915915');
$alumno9 = new alumno('Parra','Elizabeth','75375375');
$alumno10 = new alumno('Roldan','Lautaro','35735735');
$alumno11 = new alumno('Goytea','Vanina','45645645');
$alumno12 = new alumno('Arraiga','Agustina','45648948');
$alumno13 = new alumno('Goytea','Fernando','75675675');
$alumno14 = new alumno('Alfaro','Veronica','74174174');
$alumno15 = new alumno('Guzman','Matias','85285285');
$alumno16 = new alumno('Perez','Juan','65465465');
$alumno17 = new alumno('Maza','Enzo','32143214');
$alumno18 = new alumno('Rivas','Estefania','45894589');
$alumno19 = new alumno('Gonzales','Julieta','45634563');
$alumno20 = new alumno('Sisnero','Jose','74567456');

//MATEMATICAS: Se realizo tres(3) actividades evaluativas lo que va a definir su situacion.
    $materia1->setterProfesorEncargado('Flores','Cinthia');
    echo '<b>MATERIA: ' . $materia1->getterNombreMateria().'</b>';
    echo '<p>PROFESOR: ' . $materia1->getterApProfesorEnc().', '.$materia1->getterNomProfesorEnc().'</p>';
    echo 'Listado de alumnos inscriptos :';
    echo saltolinea();    
    echo '<h4>Apellido   Nombre  ///  DNI  ///  Notas  ///  Promedio  ///  Situacion  </h4>';
    $materia1->AgregarAlumnoALegajo('Sisnero','Nicolas','41121556').$materia1->datosAlumno();
        $materia1->AgregarNotasALegajo('6'); //Actividad Evaluativa 1.
        $materia1->AgregarNotasALegajo('6'); //Actividad Evaluativa 2.
        $materia1->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia1->mostrarNotasDelLegajo();
        $materia1->CalcularPromedio();
        $materia1->RetornarListaSituacion().saltolinea();
    $materia1->AgregarAlumnoALegajo('Goytea','Araceli','12345678').$materia1->datosAlumno();
        $materia1->AgregarNotasALegajo('5'); //Actividad Evaluativa 1.
        $materia1->AgregarNotasALegajo('5'); //Actividad Evaluativa 2.
        $materia1->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia1->mostrarNotasDelLegajo();
        $materia1->CalcularPromedio();
        $materia1->RetornarListaSituacion().saltolinea();
    $materia1->AgregarAlumnoALegajo('Sisnero','Francisco','12312312').$materia1->datosAlumno();
        $materia1->AgregarNotasALegajo('4'); //Actividad Evaluativa 1.
        $materia1->AgregarNotasALegajo('5'); //Actividad Evaluativa 2.
        $materia1->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia1->mostrarNotasDelLegajo();
        $materia1->CalcularPromedio();
        $materia1->RetornarListaSituacion().saltolinea();
    $materia1->AgregarAlumnoALegajo('de Bien','Lucas','87654321').$materia1->datosAlumno();
        $materia1->AgregarNotasALegajo('2'); //Actividad Evaluativa 1.
        $materia1->AgregarNotasALegajo('3'); //Actividad Evaluativa 2.
        $materia1->AgregarNotasALegajo('2'); //Actividad Evaluativa 3.
        $materia1->mostrarNotasDelLegajo();
        $materia1->CalcularPromedio();
        $materia1->RetornarListaSituacion().saltolinea();
    $materia1->AgregarAlumnoALegajo('Quiroga','Aldana','23456789').$materia1->datosAlumno();
        $materia1->AgregarNotasALegajo('3'); //Actividad Evaluativa 1.
        $materia1->AgregarNotasALegajo('7'); //Actividad Evaluativa 2.
        $materia1->AgregarNotasALegajo('3'); //Actividad Evaluativa 3.
        $materia1->mostrarNotasDelLegajo();
        $materia1->CalcularPromedio();
        $materia1->RetornarListaSituacion().saltolinea();
    $materia1->AgregarAlumnoALegajo('Catalan','Cecilia','98765432').$materia1->datosAlumno();
        $materia1->AgregarNotasALegajo('10'); //Actividad Evaluativa 1.
        $materia1->AgregarNotasALegajo('10'); //Actividad Evaluativa 2.
        $materia1->AgregarNotasALegajo('10'); //Actividad Evaluativa 3.
        $materia1->mostrarNotasDelLegajo();
        $materia1->CalcularPromedio();
        $materia1->RetornarListaSituacion().saltolinea();

echo saltolinea();
echo saltolinea();
echo saltolinea();

//PROGRAMACION: Se realizo cinco(5) trabajos practicos evaluativas lo que va a definir su situacion con dos(2) toma de examen a alumnos
//aleatoriamente.
    $materia2->setterProfesorEncargado('Gonzales','Jesus');
    echo '<b>MATERIA: ' . $materia2->getterNombreMateria().'</b>';
    echo '<p>PROFESOR: ' . $materia2->getterApProfesorEnc().', '.$materia2->getterNomProfesorEnc().'</p>';
    echo 'Listado de alumnos inscriptos :';
    echo saltolinea();    
    echo '<h4>Apellido   Nombre  ///  DNI  ///  Notas  ///  Promedio  ///  Situacion  </h4>';
    $materia2->AgregarAlumnoALegajo('Sisnero','Nicolas','41121556').$materia2->datosAlumno();
        $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 1.
        $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 2.
        $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 3.
        $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 4.
        $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 5.
        $materia2->mostrarNotasDelLegajo();
        $materia2->CalcularPromedio();
        $materia2->RetornarListaSituacion().saltolinea();
    $materia2->AgregarAlumnoALegajo('Quiroga','Valeria','15615615').$materia2->datosAlumno();
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 1.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 2.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 3.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 4.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 5.
        $materia2->mostrarNotasDelLegajo();
        $materia2->CalcularPromedio();
        $materia2->RetornarListaSituacion().saltolinea();
    $materia2->AgregarAlumnoALegajo('de Bien','Humberto','15915915').$materia2->datosAlumno();
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 1.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 2.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 3.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 4.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 5.
        $materia2->mostrarNotasDelLegajo();
        $materia2->CalcularPromedio();
        $materia2->RetornarListaSituacion().saltolinea();
    $materia2->AgregarAlumnoALegajo('Parra','Elizabeth','75375375').$materia2->datosAlumno();
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 1.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 2.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 3.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 4.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 5.
    $materia2->TomarExamen('5');    //Examen Aleatorio.
        $materia2->mostrarNotasDelLegajo();
        $materia2->CalcularPromedio();
        $materia2->RetornarListaSituacion().saltolinea();
    $materia2->AgregarAlumnoALegajo('Roldan','Lautaro','35735735').$materia2->datosAlumno();
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 1.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 2.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 3.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 4.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 5.
    $materia2->TomarExamen('5');    //Examen Aleatorio.
        $materia2->mostrarNotasDelLegajo();
        $materia2->CalcularPromedio();
        $materia2->RetornarListaSituacion().saltolinea();
    $materia2->AgregarAlumnoALegajo('Goytea','Vanina','45645645').$materia2->datosAlumno();
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 1.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 2.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 3.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 4.
    $materia2->AgregarNotasALegajo('6'); //Trabajo Practico Evaluativo 5.
        $materia2->mostrarNotasDelLegajo();
        $materia2->CalcularPromedio();
        $materia2->RetornarListaSituacion().saltolinea();


echo saltolinea();
echo saltolinea();
echo saltolinea();
        
//INGLES: tres(3) actividades evaluativas.
$materia3->setterProfesorEncargado('Sanchez','Noelia');
    echo '<b>MATERIA: ' . $materia3->getterNombreMateria().'</b>';
    echo '<p>PROFESOR: ' . $materia3->getterApProfesorEnc().', '.$materia3->getterNomProfesorEnc().'</p>';
    echo 'Listado de alumnos inscriptos :';
    echo saltolinea();    
    echo '<h4>Apellido   Nombre  ///  DNI  ///  Notas  ///  Promedio  ///  Situacion  </h4>';
    $materia3->AgregarAlumnoALegajo('Sisnero','Nicolas','41121556').$materia3->datosAlumno();
        $materia3->AgregarNotasALegajo('6'); //Actividad Evaluativa 1.
        $materia3->AgregarNotasALegajo('6'); //Actividad Evaluativa 2.
        $materia3->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia3->mostrarNotasDelLegajo();
        $materia3->CalcularPromedio();
        $materia3->RetornarListaSituacion().saltolinea();
    $materia3->AgregarAlumnoALegajo('Arraiga','Agustina','45648948').$materia3->datosAlumno();
        $materia3->AgregarNotasALegajo('5'); //Actividad Evaluativa 1.
        $materia3->AgregarNotasALegajo('5'); //Actividad Evaluativa 2.
        $materia3->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia3->mostrarNotasDelLegajo();
        $materia3->CalcularPromedio();
        $materia3->RetornarListaSituacion().saltolinea();
    $materia3->AgregarAlumnoALegajo('Goytea','Fernando','75675675').$materia3->datosAlumno();
        $materia3->AgregarNotasALegajo('4'); //Actividad Evaluativa 1.
        $materia3->AgregarNotasALegajo('5'); //Actividad Evaluativa 2.
        $materia3->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia3->mostrarNotasDelLegajo();
        $materia3->CalcularPromedio();
        $materia3->RetornarListaSituacion().saltolinea();
    $materia3->AgregarAlumnoALegajo('Alfaro','Veronica','74174174').$materia3->datosAlumno();
        $materia3->AgregarNotasALegajo('2'); //Actividad Evaluativa 1.
        $materia3->AgregarNotasALegajo('3'); //Actividad Evaluativa 2.
        $materia3->AgregarNotasALegajo('2'); //Actividad Evaluativa 3.
        $materia3->mostrarNotasDelLegajo();
        $materia3->CalcularPromedio();
        $materia3->RetornarListaSituacion().saltolinea();
    $materia3->AgregarAlumnoALegajo('Guzman','Matias','85285285').$materia3->datosAlumno();
        $materia3->AgregarNotasALegajo('3'); //Actividad Evaluativa 1.
        $materia3->AgregarNotasALegajo('7'); //Actividad Evaluativa 2.
        $materia3->AgregarNotasALegajo('3'); //Actividad Evaluativa 3.
        $materia3->mostrarNotasDelLegajo();
        $materia3->CalcularPromedio();
        $materia3->RetornarListaSituacion().saltolinea();
    $materia3->AgregarAlumnoALegajo('Perez','Juan','65465465').$materia3->datosAlumno();
        $materia3->AgregarNotasALegajo('10'); //Actividad Evaluativa 1.
        $materia3->AgregarNotasALegajo('10'); //Actividad Evaluativa 2.
        $materia3->AgregarNotasALegajo('10'); //Actividad Evaluativa 3.
        $materia3->mostrarNotasDelLegajo();
        $materia3->CalcularPromedio();
        $materia3->RetornarListaSituacion().saltolinea();


echo saltolinea();
echo saltolinea();
echo saltolinea();

//ESTADISTICA
$materia4->setterProfesorEncargado('Flores','Cinthia');
    echo '<b>MATERIA: ' . $materia4->getterNombreMateria().'</b>';
    echo '<p>PROFESOR: ' . $materia4->getterApProfesorEnc().', '.$materia4->getterNomProfesorEnc().'</p>';
    echo 'Listado de alumnos inscriptos :';
    echo saltolinea();    
    echo '<h4>Apellido   Nombre  ///  DNI  ///  Notas  ///  Promedio  ///  Situacion  </h4>';
    $materia4->AgregarAlumnoALegajo('Sisnero','Nicolas','41121556').$materia4->datosAlumno();
        $materia4->AgregarNotasALegajo('6'); //Actividad Evaluativa 1.
        $materia4->AgregarNotasALegajo('6'); //Actividad Evaluativa 2.
        $materia4->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia4->mostrarNotasDelLegajo();
        $materia4->CalcularPromedio();
        $materia4->RetornarListaSituacion().saltolinea();
    $materia4->AgregarAlumnoALegajo('Goytea','Araceli','12345678').$materia4->datosAlumno();
        $materia4->AgregarNotasALegajo('5'); //Actividad Evaluativa 1.
        $materia4->AgregarNotasALegajo('5'); //Actividad Evaluativa 2.
        $materia4->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia4->mostrarNotasDelLegajo();
        $materia4->CalcularPromedio();
        $materia4->RetornarListaSituacion().saltolinea();
    $materia4->AgregarAlumnoALegajo('Maza','Enzo','32143214').$materia4->datosAlumno();
        $materia4->AgregarNotasALegajo('4'); //Actividad Evaluativa 1.
        $materia4->AgregarNotasALegajo('5'); //Actividad Evaluativa 2.
        $materia4->AgregarNotasALegajo('6'); //Actividad Evaluativa 3.
        $materia4->mostrarNotasDelLegajo();
        $materia4->CalcularPromedio();
        $materia4->RetornarListaSituacion().saltolinea();
    $materia4->AgregarAlumnoALegajo('Rivas','Estefania','45894589').$materia4->datosAlumno();
        $materia4->AgregarNotasALegajo('2'); //Actividad Evaluativa 1.
        $materia4->AgregarNotasALegajo('3'); //Actividad Evaluativa 2.
        $materia4->AgregarNotasALegajo('2'); //Actividad Evaluativa 3.
        $materia4->mostrarNotasDelLegajo();
        $materia4->CalcularPromedio();
        $materia4->RetornarListaSituacion().saltolinea();
    $materia4->AgregarAlumnoALegajo('Gonzales','Julieta','45634563').$materia4->datosAlumno();
        $materia4->AgregarNotasALegajo('3'); //Actividad Evaluativa 1.
        $materia4->AgregarNotasALegajo('7'); //Actividad Evaluativa 2.
        $materia4->AgregarNotasALegajo('3'); //Actividad Evaluativa 3.
        $materia4->mostrarNotasDelLegajo();
        $materia4->CalcularPromedio();
        $materia4->RetornarListaSituacion().saltolinea();
    $materia4->AgregarAlumnoALegajo('Sisnero','Jose','74567456').$materia4->datosAlumno();
        $materia4->AgregarNotasALegajo('10'); //Actividad Evaluativa 1.
        $materia4->AgregarNotasALegajo('10'); //Actividad Evaluativa 2.
        $materia4->AgregarNotasALegajo('10'); //Actividad Evaluativa 3.
        $materia4->mostrarNotasDelLegajo();
        $materia4->CalcularPromedio();
        $materia4->RetornarListaSituacion().saltolinea();


echo saltolinea();
echo saltolinea();
echo saltolinea();


?>