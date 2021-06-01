<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Ejercicio 5</title>
</head>
<body>
    <!--FORMULARIO-->
    <h2>Introduzca dos valores enteros:</h2>
    </br>
    <form action="EjercicioN5.php" method="POST">
        <input type="text" name="nNum1" id="idNum1" placeholder="Introducir valor">
        <input type="text" name="nNum2" id="idNum2" placeholder="Introducir valor">
        <select name="nSelect" id="idSelect">
            <option value="nSuma">Suma</option>
            <option value="nResta">Resta</option>
        </select></br></br>
        <input type="submit" value="Enviar" name="nEnviar" id="idEnviar"></br>
    </form>
    <!--PROCESO-->
    <?php
        if (isset($_POST['nEnviar'])){
            $num1 = $_POST['nNum1'];
            $num2 = $_POST['nNum2'];
            if(empty($num1) || empty($num2) || is_numeric($num1) == false || is_numeric($num2) == false){
                echo '</br> Falta ingresar valores o no son numeros enteros.';
            }else{
                echo '</br> Los numeros ingresados son: ' . $num1 . ' y ' . $num2;
                if($_REQUEST['nSelect'] == 'nSuma'){
                    $suma = $num1 + $num2;
                    echo '</br> La suma de los numeros es: '. $suma;
                }else if($_REQUEST['nSelect'] == 'nResta'){
                    $resta = $num1 - $num2;
                    echo '</br> La resta de los numeros es: '. $resta;
                    }
                }
        }
    ?>
</body>
</html>