<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 - Ejercicio 1</title>
</head>
<body>
    <?php
    //Generacion del numero aleatorio
        $numaleatorio = rand(-10,10);
        echo 'El numero obtenido es ' . $numaleatorio;
        echo '</br>';
    
    //Analisis del numero obtenido
        //Positivo o Negativo
        if($numaleatorio >= 0){
            echo 'El numero ' . $numaleatorio . ' es positivo';
            echo '</br>';
        }else{
            echo 'El numero ' . $numaleatorio . ' es negativo';
            echo '</br>';
        }
        //Par o Impar y Multiplo de 2
        if($numaleatorio % 2 == 0){
            echo 'El numero ' . $numaleatorio . ' es par';
            echo '</br>';
            echo 'El numero ' . $numaleatorio . ' es multiplo de 2';
            echo '</br>';
        }else{
            echo 'El numero ' . $numaleatorio . ' es impar';            
            echo '</br>';
            echo 'El numero ' . $numaleatorio . ' no es multiplo de 2';
            echo '</br>';
        }
        //Es igual a 0?
        if($numaleatorio == 0){
            echo 'El numero ' . $numaleatorio . ' es igual 0';
            echo '</br>';
        }else{
            echo 'El numero ' . $numaleatorio . ' es distinto de 0';
            echo '</br>';
        }
        //Mostrar nombre en letras solo si es mayor que 0
        switch ($numaleatorio){
            case 0:
                if ($numaleatorio == 0){
                    echo "El numero es CERO";
                }
                break;
            case 1:
                if ($numaleatorio == 1){
                    echo "El numero es UNO";
                }
                break;
            case 2:
                if ($numaleatorio == 2){
                    echo "El numero es DOS";
                }
                break;
            case 3:
                if ($numaleatorio == 3){
                    echo "El numero es TRES";
                }
                break;
            case 4:
                if ($numaleatorio == 4){
                    echo "El numero es CUATRO";
                }
                break;
            case 5:
                if ($numaleatorio == 5){
                    echo "El numero es CINCO";
                }
                break;
            case 6:
                if ($numaleatorio == 6){
                    echo "El numero es SEIS";
                }
                break;
            case 7:
                if ($numaleatorio == 7){
                    echo "El numero es SIETE";
                }
                break;
            case 8:
                if ($numaleatorio == 8){
                    echo "El numero es OCHO";
                }
                break;
            case 9:
                if ($numaleatorio == 9){
                    echo "El numero es NUEVE";
                }
                break;
            case 10:
                if ($numaleatorio == 10){
                    echo "El numero es DIEZ";
                }
                break;
        }
    ?>
</body>
</html>