<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 6</title>
</head>
<body>
    <!--FORMULARIO-->
    <form action="Actividad6.php" method="POST">
    <h2>GENERADOR DE TABLAS</h2>
    <h3>Ingrese el numero de filas y columnas para generar la tabla.</h3>
        Filas  <input type="number" name="nFila" id="idFila"></br></br>
        Columnas  <input type="number" name="nColumna" id="idColumna"></br></br>
        <h4>OPCIONAL</h4>
        Dato  <input type="text" name="nDato" id="idDato">
        en fila  <input type="number" name="nFila1" id="idFila1">
        y columna  <input type="number" name="nColumna1" id="idColumna1"></br></br>
        <input type="submit" name="nSubmit" id="idSubmit" value="Generar">
    </form>

    <!--PROCESO-->
    <?php
        //CLASE
        class Tabla{
            //Atributos
            public $filas;
            public $columnas;
            //Metodos
            function __construct($nrofilas,$nrocolumnas){
                $this->filas = $nrofilas;
                $this->columnas = $nrocolumnas;
            }

            function generaciontabla($d,$fi,$co){
                if($this->filas <= 0 || $this->columnas <= 0){
                    echo '</br> Error. No es posible generar la tabla ya que puso un numero negativo, cero o está vacio.';
                }else{
                    $this->comienzoTabla();
                    $t = 1;
                    for ($f=1; $f <= $this->filas; $f++) { 
                        $this->comienzoFila();
                        for ($c=1; $c <= $this->columnas; $c++){
                            if($fi == $f && $co == $c){
                                $this->comienzoColumna();
                            	echo $d;
                                $t++;
                            }else{
                                $this->comienzoColumna();
                                echo $t;
                                $t++;
                            }
                            $this->cierreColumna();
                            }
                        $this->cierreFila();
                        }
                    $this->cierreTabla();
                }
            }

            function comienzoTabla(){
                echo '</br><table border=2>';
            }

            function cierreTabla(){
                echo '</table>';
            }

            function comienzoFila(){
                echo '<tr>';
            }

            function cierreFila(){
                echo '</tr>';
            }
            
            function comienzoColumna(){
                echo '<td>';
            }
            
            function cierreColumna(){
                echo '</td>';
            }

        }

        //INSTANCIA
        if(isset($_REQUEST['nSubmit'])){
            $tabla = new Tabla($_REQUEST['nFila'],$_REQUEST['nColumna']);
            $tabla->generaciontabla($_REQUEST['nDato'],$_REQUEST['nFila1'],$_REQUEST['nColumna1']);
        }
    ?>

</body>
</html>