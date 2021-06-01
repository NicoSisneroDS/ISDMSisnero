<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Ejercicio 4</title>
</head>
<body>
    <!--FORMULARIO-->
    <h2>Elija que deportes practica:</h2>
    </br>
    <form action="EjercicioN4.php" method="POST">
        <input type="checkbox" name="nDep1" id="idDep1" value="Futbol">Futbol</br>
        <input type="checkbox" name="nDep2" id="idDep2" value="Basket">Basket</br>
        <input type="checkbox" name="nDep3" id="idDep3" value="Tenis">Tenis</br>
        <input type="checkbox" name="nDep4" id="idDep4" value="Volley">Volley</br></br>
        <input type="submit" value="Enviar" name="nEnviar" id="idEnviar"></br>
    </form>
    <!--PROCESO-->
    <?php
        if (isset($_POST['nEnviar'])){
            $cont = 0;
            if(isset($_POST['nDep1'])){
                $cont++;
            }
            if(isset($_POST['nDep2'])){
                $cont++;
            }
            if(isset($_POST['nDep3'])){
                $cont++;
            }
            if(isset($_POST['nDep4'])){
                $cont++;
            }
            echo 'La canitdad de deportes que practicas es de: ' . $cont;
        }
    ?>
</body>
</html>