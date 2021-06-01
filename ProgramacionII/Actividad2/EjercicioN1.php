<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Ejercicio 1</title>
</head>
<body>
    <!--FORMULARIO-->
    <h2>Bienvenido, para seguir con el formulario complete los siguientes datos:</h2>
    </br>
    <form action="EjercicioN1.php" method="POST">
        <input type="text" placeholder="Escribe tu Nombre" name="nNombre" id="idNombre">
        <input type="text" placeholder="Escribe tu Apellido" name="nApellido" id="idApellido">
        <input type="submit" value="Enviar" name="nEnviar" id="idEnviar">
    </form>
    <!--PROCESO-->
    <?php
        if (isset($_POST['nEnviar'])){
            $nombre = $_POST['nNombre'];
            $apellido = $_POST['nApellido'];
            echo '</br>';
            echo 'Bienvenido ' . $nombre . ' ' . $apellido . '!!!';
        }
    ?>
</body>
</html>