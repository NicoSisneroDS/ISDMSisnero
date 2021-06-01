<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Ejercicio 3</title>
</head>
<body>
    <!--FORMULARIO-->
    <h2>Determine que tipo de estudios posee:</h2>
    </br>
    <form action="EjercicioN3.php" method="POST">
        <input type="radio" name="nEst1" id="idEst1" value="no posee estudios completos">Sin estudios</br>
        <input type="radio" name="nEst2" id="idEst2" value="posee estudios primarios completos">Estudios primarios completos</br>
        <input type="radio" name="nEst3" id="idEst3" value="posee estudios secundarios completos">Estudios secundarios completos</br></br>
        <input type="submit" value="Enviar" name="nEnviar" id="idEnviar"></br>
    </form>
    <!--PROCESO-->
    <?php
        if (isset($_POST['nEnviar'])){
            if(isset($_POST['nEst1'])){
                $a = $_POST['nEst1'];
                echo 'Usted ' . $a;
                }elseif(isset($_POST['nEst2'])){
                    $b = $_POST['nEst2'];
                    if(isset($_POST['nEst3'])){
                        $d = $_POST['nEst3'];
                        echo 'Usted ' . $b . ' y ' . $d;
                    }else{
                        echo 'Usted ' . $b;
                    }
                }elseif(isset($_POST['nEst3'])){ 
                    $c = $_POST['nEst3'];
                    echo 'Usted ' . $c;
                }else{ //TERMINAR
                    echo 'No es posible';
                }
        }
    ?>
    
</body>
</html>