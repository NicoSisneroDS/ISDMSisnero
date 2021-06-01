<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 - Ejercicio 6</title>
</head>
<body>
    <?php
    //Array de 10 valores.
    $arr = array(21,5,98,6,4,2,55,34,12,73);
    //En caso de que se repitan se eliminan.
        $valores = array_unique($arr);
    //Ordenar de mayor a menor.
    rsort($valores);
    print_r($valores);
    ?>
</body>
</html>