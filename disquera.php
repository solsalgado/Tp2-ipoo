<?php 
class Disquera{
    private $horaDesde = [];
    private $horaHasta = [];
    private $estado;
    private $direccion;
    private $duenio;

    public function __construct($horaDesde, $horaHasta, $estado, $direccion, $duenio){
        $this->horaDesde = $horaDesde;
        $this->horaHasta = $horaHasta;
        $this->estado = $estado;
        $this->direccion = $direccion;
        $this->duenio = $duenio;
    }

    public function getHoraDesde(){
        return $this->horaDesde;
    }
    public function getHoraHasta(){
        return $this->horaHasta;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getDuenio(){
        return $this->duenio;
    }

    public function setHoraDesde($horaDesde){
        $this->horaDesde = $horaDesde;
    }
    public function setHoraHasta($horaHasta){
        $this->horaHasta = $horaHasta;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setDuenio($duenio){
        $this->duenio = $duenio;
    }

    public function __toString(){
        return "Hora de apertura: ". $this->mostrarArrayHoraDesde(). "\n". 
               "Hora de cierre: ". $this->mostrarArrayHoraHasta(). "\n". 
               "Estado: ". $this->getEstado(). "\n". 
               "Dirección: ". $this->getDireccion(). "\n". 
               "Dueño: \n". $this->getDuenio(). "\n";
    }

    public function mostrarArrayHoraDesde(){
        $horaD = $this->getHoraDesde();
        $texto = "";
        $texto = $texto. $horaD["hora"].":". $horaD["minutos"];

        return $texto;
    }

    public function mostrarArrayHoraHasta(){
        $horaD = $this->getHoraHasta();
        $texto = "";
        $texto = $texto. $horaD["hora"].":". $horaD["minutos"];

        return $texto;
    }


    public function dentroHorarioAtencion($hora, $minutos){
        $horaD = $this->getHoraDesde();
        $horaH = $this->getHoraHasta();
        $abierto = false;

        if($horaD["hora"] <= $hora && $horaD["minutos"] <= $minutos &&
            $horaH["hora"] >= $hora && $horaH["minutos"] >= $minutos){
            $abierto = true;
        } else {
            $abierto = false;
        }

        return $abierto;
    }

    public function abrirDisquera($hora, $minutos){
        $horaD = $this->getHoraDesde();
        $estadoD = $this->getEstado();

        if($horaD["hora"] < $hora && $horaD["minutos"] <= $minutos){
            $estadoD = "Abierto";
            $this->setEstado($estadoD);
        } else{
                $estadoD = "Cerrado";
                $this->setEstado($estadoD);
        }
    }

    public function cerrarDisquera($hora, $minutos){
        $horaH = $this->getHoraHasta();
        $estadoD = $this->getEstado();

        if($horaH["hora"] < $hora && $horaH["minutos"] <= $minutos){
            $estadoD = "Cerrado";
            $this->setEstado($estadoD);                
        } else{
            $estadoD = "Abierto";
            $this->setEstado($estadoD);
        }
    }

}