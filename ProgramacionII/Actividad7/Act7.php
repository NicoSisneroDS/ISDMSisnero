<?php
    echo 'PARTE 1';
    class cabecera{
        //ATRIBUTOS
        public $titulo;
        //METODOS
        public function __construct($t){
            $this->titulo = $t;
        }
        public function printTitulo(){
            echo '<h1 align="left">'.$this->titulo.'</h1></br>';
        }
    }

    class cuerpo{
        //ATRIBUTOS
        public $texto = array();
        //METODOS
        public function insertarParrafo($valor){
            $this->texto[] = $valor.'</br>';
        }
        public function printParrafo(){
            for($f = 0;$f < count($this->texto);$f++){
                echo '<p>'.$this->texto[$f].'</p>';
            }
        }
    }


    class pie{
        //ATRIBUTOS
        public $pie;
        //METODOS
        public function __construct($p){
            $this->pie = $p;
        }
        public function printPie(){
            echo '<h4 align="center">'.$this->pie.'</h4></br>';
        }
    }

    $cab = new cabecera('Este es un titulo');
        $cab->printTitulo();
    
    $parr = new cuerpo();
        $parr->insertarParrafo('PARRAFO 1');
        $parr->insertarParrafo('parrafo 2');
        $parr->insertarParrafo('ParrafO 3');
        $parr->printParrafo();

    $pie = new pie('Este es un pie de pagina');
        $pie->printPie();
    
    echo '</br></br></br>';
    echo 'PARTE 2';
    echo '</br></br></br>';

    class pagina{
        //ATRIBUTOS
        public $Cabecera;
        public $Cuerpo;
        public $Pie;
        //METODOS
        public function __construct($ca,$pi){
            $this->Cabecera = new cabecera($ca);
            $this->Cuerpo = new cuerpo();
            $this->Pie = new pie($pi);
        }

        public function insertarCuerpo($c){
            $this->Cuerpo->insertarParrafo($c).'</br>';
        }

        public function graficar(){
            echo $this->Cabecera->printTitulo();
            echo $this->Cuerpo->printParrafo();
            echo $this->Pie->printPie();
        }
    }

    $parte2 = new pagina('Este es un titulo','Este es un pie de pagina');
        $parte2->insertarCuerpo('PARRAFO 1');
        $parte2->insertarCuerpo('parrafo 2');
        $parte2->insertarCuerpo('ParrafO 3');
        $parte2->graficar();
    
?>