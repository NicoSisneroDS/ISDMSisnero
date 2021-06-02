<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Ejercicio 6</title>
</head>
<body>
    <!--FORMULARIO-->
    <h2>Curriculum Vitae</h2>
    <form action="EjercicioN6.php" method="POST">
        <h4>Nombre</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Apellido</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Edad</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Estado Civil</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Domicilio</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Nivel de Estudios</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Experiencia Laboral</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Conocimientos</h4><textarea name="nNombre" id="idNombre" cols="30" rows="1"></textarea>
        <h4>Ingresos Mensuales</h4>
        <select name="nSelect" id="idSelect">
            <option value="opc1">1 - 10000</option>
            <option value="opc2">10001 - 30000</option>
            <option value="opc3">Mas de 30000</option>
        </select></br></br>
        <input type="submit" value="Enviar Formulario" name="nEnviar" id="idEnviar"></br>
    </form>
    <!--PROCESO-->
    <?php
        if (isset($_POST['nEnviar'])){
            if($_REQUEST['nSelect'] == 'opc1'){
                echo '</br> Usted no debe pagar impuestos a la ganancia.';
            }else if($_REQUEST['nSelect'] == 'opc2'){
                echo '</br> Usted no debe pagar impuestos a la ganancia.';
            }else if($_REQUEST['nSelect'] == 'opc3'){
                echo '</br> Usted DEBE pagar impuestos a la ganancia.';
            }
        }
    ?>
</body>
</html>