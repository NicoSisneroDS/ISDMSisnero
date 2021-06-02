<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 - Ejercicio 1</title>
</head>
<body>
    <?php
    function sumnumeros($a,$b,$c,$d,$e){
        if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c) || !is_numeric($d) || !is_numeric($e)){
            return 'No es posible, los datos ingresados no son numeros.';
        }else{
            $suma = $a+$b+$c+$d+$e;
            return $suma;
        }
    }
    $tmp = sumnumeros(2,5,1,8,10);
    print $tmp;
    ?>
</body>
</html>