<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 - Ejercicio 2</title>
</head>
<body>
    <?php
    //Generando variables
    $numhora = rand(00,99);
    $nummin = rand(00,99);
    $numsec = rand(00,99);
    //Hora formada
    echo 'La hora formada es ' . $numhora . ':' . $nummin . ':' . $numsec;
    echo '</br>';
    //Comprobacion
        //Hora
        if($numhora <= 23){
            $numhora = true;
        }else{
            $numhora = false;
        }
        //Minutos
        if($nummin <= 60){
            $nummin = true;
        }else{
            $nummin = false;
        }
        //Segundos
        if($numsec <= 60){
            $numsec = true;
        }else{
            $numsec = false;
        }
    //Finaliacion
    if ($numhora == true && $nummin == true && $numsec == true){
        echo 'La hora formada es valida';
    }else{
        echo 'La hora formada no es valida';
    }
    ?>
</body>
</html>