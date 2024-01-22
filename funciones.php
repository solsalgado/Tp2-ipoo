<?php 
class Funciones{
    private $nombre;
    private $horarioInicio;
    private $duracionObra;
    private $precio;

    public function __construct($nombre, $horarioInicio, $duracionObra, $precio){
        $this->nombre = $nombre;
        $this->horarioInicio = $horarioInicio;
        $this->duracionObra = $duracionObra;
        $this->precio = $precio;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getHorarioInicio(){
        return $this->horarioInicio;
    }
    public function getDuracionObra(){
        return $this->duracionObra;
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setHorarioInicio($horarioInicio){
        $this->horarioInicio = $horarioInicio;
    }
    public function setDuracionObra($duracionObra){
        $this->duracionObra = $duracionObra;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function __toString()
    {
        return "Nombre de la funcion: ". $this->getNombre(). "\n". 
               "Horario de inicio: ". $this->getHorarioInicio(). "\n". 
               "Duracion: ". $this->getDuracionObra(). "\n". 
               "Precio: ". $this->getPrecio(). "\n";
    }
}