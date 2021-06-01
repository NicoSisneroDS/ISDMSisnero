<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 - Ejercicio 5</title>
</head>
<body>
    <?php
    //Tabla realizada con FOR
    echo 'Tabla con FOR </br>';
    for ($i = 0; $i <= 10; $i++) { 
        $resul1 = $i * 2;
        echo '2 x ' . $i . ' = ' . $resul1 . '</br>';
    };
    echo '</br>';

    //Tabla realizada con WHILE
    echo 'Tabla con WHILE </br>';
    $tabla = 0;
    while ($tabla <= 10) {
        $resul2 = $tabla * 2;
        echo '2 x ' . $tabla . ' = ' . $resul2 . '</br>';
        $tabla++;
    }
    echo '</br>';
    //Tabla realizada con DO WHILE
    echo 'Tabla con WHILE </br>';
    $multiplicador = 0;
    do {
        $resul3 = $multiplicador * 2;
        echo '2 x ' . $multiplicador . ' = ' . $resul3 . '</br>';
        $multiplicador++;
    } while ($multiplicador <= 10);
    echo '</br>';

    ?>
</body>
</html>