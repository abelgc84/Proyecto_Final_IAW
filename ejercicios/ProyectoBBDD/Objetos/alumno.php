<?php

class AlumnoASIR {

    public $nombre;
    public $apellidos;
    public $edad;
    public $notasPrimerCurso;
    public $email;

    public function __construct($nombre, $apellidos, $edad, $email){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->edad=$edad;
        $this->email=$email;
    }

    public function getNombre () {
        return $this->nombre;
    }
    
    public function getApellidos () {
        return $this->apellidos;
    }

    public function getEdad () {
        return $this->edad;
    }

    public function getNotasPrimerCurso () {
        return $this->notasPrimerCurso;
    }

    public function getEmail () {
        return $this->email;
    }

    public function setNotasPrimero ($lm, $bd, $redes, $fol, $so){
        $this->notasPrimerCurso=array();
        $this->notasPrimerCurso['lm']=$lm;
        $this->notasPrimerCurso['bd']=$bd;
        $this->notasPrimerCurso['redes']=$redes;
        $this->notasPrimerCurso['fol']=$fol;
        $this->notasPrimerCurso['so']=$so;
    } 

    public function notaMediaPrimero(){
        $total=0;
        $numNotas=0;
        foreach ($this->notasPrimerCurso as $nota){
            $total=$total+$nota;
            $numNotas++;
        }
        return ($total/$numNotas);
    }
}

?>