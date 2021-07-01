<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 8</title>
</head>
<body>
<!--FORMULARIO-->
<form action="Act8.php" method="POST">
<h1>Bienvenido Alumno de Segundo Año</h1>
<h2>Complete el siguiente formulario</h2>
    <div>Nombre: <input type="text" name="nNombre" id="idNombre" placeholder="Ingrese nombre..."></div></br>
    <div>Apellido: <input type="text" name="nApellido" id="idApellido" placeholder="Ingrese apellido..."></div></br>
    <div>Fecha de Nacimiento: <input type="date" name="nFecha" id="idFecha"></div></br>
    <div>Usuario: <input type="text" name="nUsuario" id="idUsuario" placeholder="Ingrese usuario(minim. 8)"></div></br>
    <div>Materias que está cursando (Separadas por ' , '): <input type="text" name="nMaterias" id="idMaterias" placeholder="Ingrese materias"></div></br>
    <div><input type="submit" name="nSubmit" id="idSubmit" value="Enviar"></div></br>
</form>

<!--PROCESO-->
<?php
//PARTE 1
//Definir clase persona y sus atributos
abstract class persona{
    //ATRIBUTOS
    protected $nombre;
    protected $apellido;
    protected $fechanacimiento;
    protected $usuario;
    protected $cantcambiousuario = 0;
    //METODOS
    //Definir constructor
    public function __construct($n,$a,$f){
        $this->nombre = $n;
        $this->apellido = $a;
        $this->fechanacimiento = $f;
    }
    //Definir setter
    public function setterUsuario($usu){
        if(strlen($usu) < 8){
            echo 'Error: Su usuario debe tener al menos 8 caracteres.</br>';
        }else{
            $this->cantcambiousuario++;
            if($this->cantcambiousuario > 2){
                echo 'Error: No puede cambiar el usuario porque ya supero el limite de cambios permitidos.</br>';
            }else{
                $this->usuario = $usu;
            }
        }
    }
    //Definir getters
    public function getterNyA(){
        echo 'Nombre: '.$this->nombre.'</br>';
        echo 'Apellido: '.$this->apellido.'</br>';
    }
    public function getterUsu(){
        echo 'Usuario: '.$this->usuario.'</br>';
    }
    public function getterEdad(){
        echo 'Fecha de Nacimiento: '.$this->fechanacimiento.'</br>';
    }
    //Otras funciones
    //Utilizo la clase DateTime que ya viene diseñada por php
    public function calculoEdad($fecha){
        $nacimiento = new DateTime($fecha);
        $actual = new Datetime();
        $dif = $actual->diff($nacimiento);
        echo 'Usted tiene: '.$dif->y.' años.</br>';
    }
}

class alumnos extends persona{
    //ATRIBUTOS
    public $materias = array();
    //METODOS
    public function setterMaterias($mat){
        $this->materias = explode(',', $mat);
    }
    public function getterMaterias(){
        for($i = 0;$i < count($this->materias);$i++){
            echo $this->materias[$i].'</br>';
        }
    }
}

//Instanciacion
if(isset($_REQUEST['nSubmit'])){
    //CLASE ABSTRACTA
    //echo '</br></br>INSTANCIA PERSONA   </br>';
    //$p1 = new persona($_REQUEST['nNombre'],$_REQUEST['nApellido'],$_REQUEST['nFecha']);
        //Nombre y apellido
        //$p1->getterNyA();
        //Edad
        //$p1->calculoEdad($_REQUEST['nFecha']);
        //Nombre usuario 
        //$p1->setterUsuario($_REQUEST['nUsuario']);
        //$p1->getterUsu();

    echo '</br></br>INSTANCIA ALUMNO</br>';
    $p2 = new alumnos($_REQUEST['nNombre'],$_REQUEST['nApellido'],$_REQUEST['nFecha']);
        //Nombre y apellido
        $p2->getterNyA();
        //Edad
        $p2->calculoEdad($_REQUEST['nFecha']);
        //Nombre usuario 
        $p2->setterUsuario($_REQUEST['nUsuario']);
        $p2->getterUsu();
        //Materias que cursa
        $p2->setterMaterias($_REQUEST['nMaterias']);
        echo 'Cursa las materias: ';
        $p2->getterMaterias();
}

?>
</body>
</html>