<?php 
class Lectura{
    private $objLibro;
    private $numPagina;

    public function __construct($objLibro, $numPagina){
        $this->objLibro = $objLibro;
        $this->numPagina = $numPagina;
    }

    public function getObjLibro(){
        return $this->objLibro;
    }
    public function getNumPagina(){
        return $this->numPagina;
    }
    
    public function setObjLibro($objLibro){
        $this->objLibro = $objLibro;
    }
    public function setNumPagina($numPagina){
        $this->numPagina = $numPagina;
    }

    public function __toString(){
        return "Libro: ". $this->getObjLibro(). "\n". 
               "Número de página: ". $this->getNumPagina(). "\n";
    }

    public function siguientePagina(){
        $pagActual = $this->getNumPagina();

        $sigPag = $pagActual++;
        $this->setNumPagina($sigPag);
        return $pagActual;        

    }

    public function retrocederPagina(){
        $pagActual = $this->getNumPagina();

        $pagAnterior = $pagActual--;
        $this->setNumPagina($pagAnterior);
        return $pagActual;        

    }

    public function irAPagina($num){
        $pagActual = $this->getNumPagina();
        $this->setNumPagina($num);
        return $pagActual;

    }
}