<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 - Ejercicio 3</title>
</head>
<body>
    <!--FORMULARIO de Actividad 2 Ejercicio 5-->
    <h2>Introduzca dos valores enteros:</h2>
    </br>
    <form action="EjercicioN3.php" method="POST">
        <input type="text" name="nNum1" id="idNum1" placeholder="Introducir valor">
        <input type="text" name="nNum2" id="idNum2" placeholder="Introducir valor">
        <select name="nSelect" id="idSelect">
            <option value="nSuma">Suma</option>
            <option value="nResta">Resta</option>
            <option value="nMult">Multiplicacion</option>
            <option value="nDiv">Division</option>
        </select></br></br>
        <input type="submit" value="Enviar" name="nEnviar" id="idEnviar"></br>
    </form>
    <?php
    if (isset($_POST['nEnviar'])){
        //REQUEST VALORES
        $numero1 = $_POST['nNum1'];
        $numero2 = $_POST['nNum2'];
        
        function calculo($num1,$num2,$op){
            if(empty($num1) || empty($num2) || !is_numeric($num1) || !is_numeric($num2)){
                echo '</br> Falta ingresar valores o no son numeros enteros.';
            }else{
                if($op == 'nSuma'){
                    $suma = $num1 + $num2;
                    return 'La suma de los valores es de: ' . $suma;
                }elseif($op == 'nResta'){
                    $resta = $num1 - $num2;
                    return 'La resta de los valores es de: ' . $resta;
                }elseif($op == 'nMult'){
                    $multi = $num1 * $num2;
                    return 'La multiplicacion de los valores es de: ' . $multi;
                }elseif($op == 'nDiv'){
                    $div = $num1 / $num2;
                    return 'La division de los valores es de: ' . $div;
                }
            }
        }
        echo '</br>';
        print calculo($numero1,$numero2,$_REQUEST['nSelect']);
    }
    ?>
</body>
</html>