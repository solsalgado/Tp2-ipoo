<?php 
class Lectura{
    private $objLibro = [];
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
        return "Libro: ". $this->mostrarArray(). "\n". 
               "Número de página: ". $this->getNumPagina(). "\n";
    }

    public function mostrarArray(){
        $objLibros = $this->getObjLibro();
        $count = count($objLibros);
        $texto = "";
        for ($i=0; $i < $count ; $i++) { 
            $texto = $texto. $objLibros[$i]. "\n";
        }
        return $texto;
    }

    public function libroLeido($titulo){
        $libros = $this->getObjLibro();
        $count = count($libros);
        $i = 0;
        $leido = false;

        while($i < $count && $leido == false){
            if($libros[$i]->getTitulo() == $titulo){
                $leido = true;
            } else{
                $leido = false;
            }
            $i++;
        }
        return $leido;
    }

    public function darSipnosis($titulo){
        $libros = $this->getObjLibro();
        $count = count($libros);
        $i = 0;
        $existe = false;

        while($i < $count && $existe == false){
            if($libros[$i]->getTitulo() == $titulo){
                $sipnosis = $libros[$i]->getSipnosis();
                $existe = true;
            }
            $i++;
        }
        return $sipnosis;
    }

    public function leidosAnioEdicion($x){
        $libros = $this->getObjLibro();
        $count = count($libros);
        $i = 0;
        $existe = false;
        $leidos = "";

        while($i < $count && $existe == false){
            if($libros[$i]->getAnioEdicion() == $x){
                $leidos = $leidos. $libros[$i]->getTitulo();
                $existe = true;
            }
            $i++;
        }
        return $leidos;
    }

    public function darLibrosPorAutor($nombreAutor){
        $libros = $this->getObjLibro();
        $count = count($libros);
        $i = 0;
        $existe = false;
        $leidos = "";

        while($i < $count && $existe == false){
            $autor = $libros[$i]->getObjPersona();
            $autorLibro = $autor->getNombre();
            if($autorLibro == $nombreAutor){
                $leidos = $leidos. $libros[$i]->getTitulo();
                $existe = true;
            }
            $i++;
        }
        return $leidos;
    }

    /*
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
    */
}