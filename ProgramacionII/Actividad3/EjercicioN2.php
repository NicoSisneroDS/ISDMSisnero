<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 - Ejercicio 2</title>
</head>
<body>
    <?php
    function sumanumeros($a,$b,$c,$d,$e){
        if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c) || !is_numeric($d) || !is_numeric($e)){
            echo 'No es posible, los datos ingresados no son numeros.';
        }else{
            $suma = $a+$b+$c+$d+$e;
            echo 'La suma de los numeros es: ' . $suma;
        }
    }    
    ?>
</body>
</html>