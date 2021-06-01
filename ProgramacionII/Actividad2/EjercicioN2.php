<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Ejercicio 2</title>
</head>
<body>
    <!--FORMULARIO-->
    <h2>Bienvenido, introduzca su edad para determinar si es mayor o menor de edad:</h2>
    </br>
    <form action="EjercicioN2.php" method="POST">
        <input type="text" placeholder="Inserte su edad" name="nEdad" id="idEdad">
        <input type="submit" value="Enviar" name="nEnviar" id="idEnviar">
    </form>
    <!--PROCESO-->
    <?php
        if (isset($_POST['nEnviar'])){
            $edad = $_POST['nEdad'];
                //Validacion de que sea una edad valida.
                if(is_numeric($edad) && $edad >=0){
                    //Determinacion si es mayor o menor de edad
                    if($edad >=18){
                        echo '</br> Eres mayor de edad';
                    }else{
                        echo '</br> Eres menor de edad';
                    }
                }else{
                    echo '</br> La edad introducida no es valida';
                    }
        }
    ?>
</body>
</html>