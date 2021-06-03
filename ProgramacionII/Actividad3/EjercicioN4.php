<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 - Ejercicio 4</title>
</head>
<body>
    <!--FORMULARIO-->
    <form action="EjercicioN4.php" method="POST">
    <h2>Bienvenido</h2>
    <h3>Complete el siguiente formulario de su familia (a dia 2 de junio del 2021)</h3>
    <h4>Datos Personales</h4>
        Nombre  <input type="text" name="nNombre1" id="idNombre1"></br></br>
        Apellido  <input type="text" name="nApellido1" id="idApellido1"></br></br>
        Fecha de Nacimiento:  <input type="date" name="nFecha1" id="idFecha1">
        
    <h4>Datos del Padre</h4>
        Nombre  <input type="text" name="nNombre2" id="idNombre2"></br></br>
        Apellido  <input type="text" name="nApellido2" id="idApellido2"></br></br>
        Fecha de Nacimiento:  <input type="date" name="nFecha2" id="idFecha2">

        
    <h4>Datos de la Madre</h4>
        Nombre  <input type="text" name="nNombre3" id="idNombre3"></br></br>
        Apellido  <input type="text" name="nApellido3" id="idApellido3"></br></br>
        Fecha de Nacimiento:  <input type="date" name="nFecha3" id="idFecha3">
    </br></br>
    <input type="submit" value="Enviar" name="nSubmit" id="idSubmit">
    </form>

    <!--PROCESO-->
    <?php
        //VALIDACIONES
        function valnom($nom){
            if(empty($nom) || is_numeric($nom)){
                echo 'El nombre ingresado no es valido o falta completar. ';
            }else{
                return $nom;
            }
        }
        function valap($ap){
            if(empty($ap) || is_numeric($ap)){
                echo 'El apellido ingresado no es valido o falta completar. ';
            }else{
                return $ap;
            }
        }
        function edad($fecha){
            if(empty($fecha) || !is_numeric($fecha)){
                echo 'La fecha ingresada no es valida o falta completar. ';
            }else{
                list($año,$mes,$dia) = explode("-",$fecha);
                if ($año <= 2003){
                    if($mes <= 6){
                        if($dia <= 2){
                            return 'es mayor de edad.';
                        }else{
                            return 'es menor de edad.';
                        }
                    }else{
                        return 'es menor de edad.';
                    }
                }else{
                    return 'es menor de edad.';
                }
            }
        }
        
        if(isset($_REQUEST['nSubmit'])){
            echo 'Tu nombre es: '. valnom($_REQUEST['nNombre1']) . ', tu apellido es: '. valap($_REQUEST['nApellido1']) . ' y ' . edad($_REQUEST['nFecha1']) . '</br>';
            echo 'Tu padre se llama: '. valnom($_REQUEST['nNombre2']) . ', su apellido es: '. valap($_REQUEST['nApellido2']) . ' y ' . edad($_REQUEST['nFecha2']) . '</br>';
            echo 'Tu madre se llama: '. valnom($_REQUEST['nNombre3']) . ', su apellido es: '. valap($_REQUEST['nApellido3']) . ' y ' . edad($_REQUEST['nFecha3']) . '</br>';
        }
    ?>

</body>
</html>