<?php
class Tramite{
    private $horarioCreacion;
    private $horarioResolucion;
    private $tipoTramite;

    public function __construct($horarioCreacion, $horarioResolucion, $tipoTramite){
        $this->horarioCreacion = $horarioCreacion;
        $this->horarioResolucion = $horarioResolucion;
        $this->tipoTramite = $tipoTramite;
    }

    public function getHorarioCreacion(){
        return $this->horarioCreacion;
    }
    public function getHorarioResolucion(){
        return $this->horarioResolucion;
    }
    public function getTipoTramite(){
        return $this->tipoTramite;
    }

    public function setHorarioCreacion($horarioCreacion){
        $this->horarioCreacion = $horarioCreacion;
    }
    public function setHorarioResolucion($horarioResolucion){
        $this->horarioResolucion = $horarioResolucion;
    }
    public function setTipoTramite($tipoTramite){
        $this->tipoTramite = $tipoTramite;
    }

    public function __toString()
    {
        return "Horario de creación: ". $this->getHorarioCreacion(). "\n".
               "Horario de resolucion: ". $this->getHorarioResolucion(). "\n".
               "Tramite: ". $this->getTipoTramite(). "\n";
    }
}