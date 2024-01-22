<?php 
class Persona{
    private $nombre;
    private $apellido;
    private $tipoDoc;
    private $dni;

    public function __construct($nombre, $apellido, $tipoDoc, $dni){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDoc = $tipoDoc;
        $this->dni = $dni;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getTipoDoc(){
        return $this->tipoDoc;
    }
    public function getDni(){
        return $this->dni;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setTipoDoc($tipoDoc){
        $this->tipoDoc = $tipoDoc;
    }
    public function setDni($dni){
        $this->dni = $dni;
    }

    public function __toString(){
        return "Nombre: ". $this->getNombre(). "\n". 
               "Apellido: ". $this->getApellido(). "\n". 
               "Tipo de documento: ". $this->getTipoDoc(). "\n". 
               "DNI: ". $this->getDni();
    }
}