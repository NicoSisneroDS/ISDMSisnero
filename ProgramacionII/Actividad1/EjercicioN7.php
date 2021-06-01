<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 - Ejercicio 3</title>
</head>
<body>
    <?php
    //Rellenar vectores.
    $arrA = range(0,44);
    $arrB = range(0,88,2);
            //lo que hice en el array A, fue de tener un rango de numeros de entre 0 y 44 cada 1, es decir, 0,1,2,3....
            //y en cambio en el array B, hice lo mismo, pero cada 2, es decir, 0,2,4,6,8...
            //mas que nada para que no sea repetitivo y cambie en algo.

    //Suma de los elementos y vector definitivo.
    for ($i=0; $i < 45; $i++) { 
        $arrC[] = $arrA[$i]+$arrB[$i];
    };
    print_r($arrC);
    ?>
</body>
</html>