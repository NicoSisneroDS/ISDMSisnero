<?php
    class cabecera{
        //ATRIBUTOS
        public $titulo;
        //METODOS
        public function __construct($t){
            $this->titulo = '<h1 style="float: left;">'.$t.'</h1></br>';
        }

        public function inicioprint(){
            echo '<!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Actividad 7 - Parte 1</title>
            </head>
            <body>';
        }
        
        public function printmensaje(){
            return $this->titulo;
        }
        
        public function finprint(){
            echo '
            </body>
            </html>';
        }

    }

    $cab = new cabecera('Este es un titulo');
    echo $cab->inicioprint();
    echo $cab->printmensaje();
    echo $cab->finprint();

?>