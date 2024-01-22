<?php 
class Mostrador{
    private $tramites = [];
    private $colaClientes;

    public function __construct($tramites, $colaClientes){
        $this->tramites = $tramites;
        $this->colaClientes = $colaClientes;
    }

    public function getTramites(){
        return $this->tramites;
    }
    public function getColaCliente(){
        return $this->colaClientes;
    }

    public function setTramites($tramites){
        $this->tramites = $tramites;
    }
    public function setColaCliente($colaClientes){
        $this->colaClientes = $colaClientes;
    }

    public function __toString()
    {
        return "". $this->mostrarArrayTramites(). "Cola cliente: ". $this->getColaCliente(). "\n". "\n";
    }

    public function mostrarArrayTramites(){
        $arrayTramites = $this->getTramites();
        $count = count($arrayTramites);
        $texto = "";
        for ($i=0; $i < $count; $i++) { 
            $texto = $texto. $arrayTramites[$i];
        }
        return $texto;
    }

    public function atiende($unTramite){
        $arrayTramites = $this->getTramites();
        $count = count($arrayTramites);
        $i = 0;
        $atiende = false;
        while($i < $count && $atiende == false){
            if($arrayTramites[$i]->getTipoTramite() == $unTramite){
                $atiende = true;
            }
            $i++;
        }
        return $atiende;
    }

    

}