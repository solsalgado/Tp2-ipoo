<?php 
class Banco{
    private $objMostrador = [];

    public function __construct($objMostrador){
        $this->objMostrador = $objMostrador;
    }

    public function getObjMostrador(){
        return $this->objMostrador;
    }

    public function setObjMostrador($objMostrador){
        $this->objMostrador = $objMostrador;
    }

    public function __toString()
    {
        return "Mostradores: \n". $this->mostrarArrayBanco();
    }

    public function mostrarArrayBanco(){
        $arrayMostrador = $this->getObjMostrador();
        $count = count($arrayMostrador);
        $texto = "";
        for ($i=0; $i < $count; $i++) { 
            $texto = $texto. $arrayMostrador[$i];
        }
        return $texto;
    }

    public function mostradoresQueAtienden($unTramite){
        $arrayMostrador = $this->getObjMostrador();
        $count = count($arrayMostrador);
        $mostradores = "";
        for ($i=0; $i < $count; $i++) { 
            $mostrador = $arrayMostrador[$i];
            $tramites = $mostrador->getTramites();   
            $count2 = count($tramites); 
            $j = 0;
            $existe = false;
            while($j < $count2 && $existe == false){
                $tramitesMostrador = $tramites[$j]->getTipoTramite();
                if($tramitesMostrador == $unTramite){
                    $mostradores = $mostradores. $arrayMostrador[$i];
                    $existe = true;
                }
                $j++;
            }       
            
        }
        return $mostradores;
    }


    public function mejorMostradorPara($unTramite){
        $arrayMostrador = $this->getObjMostrador();
        $count = count($arrayMostrador);
        $mostrador = "";
        $maximo = 50; //suponiendo que cada mostrador atiende un maximo de 50 personas
        for ($i=0; $i < $count; $i++){
            $mostradores = $arrayMostrador[$i];
            $tramites = $mostradores->getTramites();
            $count2 = count($tramites);

            for ($j=0; $j < $count2; $j++){ 
                $tramitesMostrador = $tramites[$j]->getTipoTramite();  
                if($tramitesMostrador == $unTramite){
                    $colaC = $arrayMostrador[$i];
                    $num = $colaC->getColaCliente();
                    if($num < $maximo){
                        $maximo = $num;
                        $mostrador = "". $arrayMostrador[$i];
                    } else {
                        $mostrador = null;
                    }    
                }             
            }    
        }
        return $mostrador;
    }

    public function atender($unCliente){
        $arrayMostrador = $this->getObjMostrador();
        $count = count($arrayMostrador);        
        $maximo = 50; //suponiendo que cada mostrador atiende un maximo de 50 personas
        $atiende = "";
        for ($i=0; $i < $count; $i++){
            $mostrador = $arrayMostrador[$i];
            $tramites = $mostrador->getTramites();

            $count2 = count($tramites);
            //print_r($tramites); 
            for ($j=0; $j < $count2; $j++) { 
                $tramitesMostrador = $tramites[$j]->getTipoTramite(); 
                if($unCliente["tramite"] == $tramitesMostrador){                             
                $colaC = $arrayMostrador[$i];
                $num = $colaC->getColaCliente();
                if($num < $maximo){
                    $maximo = $num;
                    $atiende = "". $arrayMostrador[$i];
                } else {
                    $atiende = "Será antendido en cuanto haya lugar en un mostrador.";
                }
                }
            }            
        }
        return $atiende;
    }
}