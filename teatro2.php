<?php 
class Teatro{
    private $nombreTeatro;
    private $direccion;
    private $objFunciones = [];

    public function __construct($nombreTeatro, $direccion, $objFunciones){
        $this->nombreTeatro = $nombreTeatro;
        $this->direccion = $direccion;
        $this->objFunciones = $objFunciones;
    }

    public function getNombreTeatro(){
        return $this->nombreTeatro;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getObjFunciones(){
        return $this->objFunciones;
    }

    public function setNombreTeatro($nombreTeatro){
        $this->nombreTeatro = $nombreTeatro;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setObjFunciones($objFunciones){
        $this->objFunciones = $objFunciones;
    }

    public function __toString()
    {
        return "Teatro: ". $this->getNombreTeatro(). "\n". 
        "Direccion: ". $this->getDireccion(). "\n". 
        "Funciones: ". $this->mostrarArray(). "\n";
    }

    public function cambiarNombre($nombreT){
        $this->setNombreTeatro($nombreT);
    }

    public function cambiarDireccion($direccionT){
        $this->setDireccion($direccionT);
    }

    public function cambiarFuncion($nombre, $nombreNuevo, $precio){
        $arrayObjFunciones = $this->getObjFunciones();
        $count = count($arrayObjFunciones);
        $i = 0;
        $encontrado = false;
        while($i < $count && $encontrado == false ){
            $funcion = $arrayObjFunciones[$i];
            $nombreF = $funcion->getNombre();
            if($nombreF == $nombre){
                $funcion->setNombre($nombreNuevo);
                $funcion->setPrecio($precio);
                $encontrado = true;
            }
            $i++;
        }
        return $encontrado;
  
    }

    public function cargarFunciones($nomTeatro, $nomFuncion, $horaI, $duracion, $precioF){
        $teatro = $this->getNombreTeatro();
        $arrayFuncion = $this->getObjFunciones();
        $count = count($arrayFuncion);
        $i = 0;
        $existe = false;
        $mostrar = "";
        if($teatro == $nomTeatro){            
            while($i < $count && $existe == false){
                $funcion = $arrayFuncion[$i];
                $hora = $funcion->getHorarioInicio();
                if($hora != $horaI){
                    array_push($arrayFuncion, ["Nombre de la funcion: " => $nomFuncion, "Horario de inicio: " => $horaI, "Duracion: " => $duracion,
                    "Precio: " => $precioF]);

                    $this->setObjFunciones($arrayFuncion);
                    //print_r($arrayFuncion);
                    $existe = true;
                }
                $i++;
            }
        }
        return $existe;
    }

    public function mostrarArray(){
        $colF = $this->getObjFunciones();
        $count = count($colF);
        $texto = "\n";
        for ($i=0; $i < $count; $i++) { 
            $texto = $texto. $colF[$i];
        }
        return $texto;

    }
}