<?php
class Libro{
    private $isbn;
    private $titulo;
    private $sipnosis;
    private $anioEdicion;
    private $editorial;
    private $cantPaginas;   
    private $objPersona;


    public function __construct($isbn, $titulo, $sipnosis, $anioEdicion, $editorial, $cantPaginas, $objPersona){
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->sipnosis = $sipnosis;
        $this->anioEdicion = $anioEdicion;
        $this->editorial = $editorial;
        $this->cantPaginas = $cantPaginas;
        $this->objPersona = $objPersona;
    }

    public function getIsbn(){
        return $this->isbn;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getSipnosis(){
        return $this->sipnosis;
    }
    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getCantPaginas(){
        return $this->cantPaginas;
    }
    public function getObjPersona(){
        return $this->objPersona;
    }

    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setSipnosis($sipnosis){
        $this->sipnosis = $sipnosis;
    }
    public function setAnioEdicion($anioEdicion){
        $this->anioEdicion = $anioEdicion;
    }
    public function setEditorial($editorial){
        $this->editorial = $editorial;
    }
    public function setCantPaginas($cantPaginas){
        $this->cantPaginas = $cantPaginas;
    }
    public function setObjPersona($objPersona){
        $this->objPersona = $objPersona;
    }

    public function __toString(){
        return "ISBN: ". $this->getIsbn(). "\n".
               "Titulo del libro: ". $this->getTitulo(). "\n".
               "Año de edicion: ". $this->getAnioEdicion(). "\n".
               "Editorial: ". $this->getEditorial(). "\n".
               "Autor: ". $this->getObjPersona(). "\n";
    }

    public function perteneceEditorial($pEditorial){
        $editorialL = $this->getEditorial();
        if($editorialL == $pEditorial){
            $pertenece = true;
        } else {
            $pertenece = false;
        }
        return $pertenece;

    }

    public function aniosDesdeEdicion(){
        $aEdicion = $this->getAnioEdicion();
        return $aEdicion;
    }


}