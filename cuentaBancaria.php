<?php 
class CuentaBancaria{
    private $numCuenta;
    private $objPersona;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numCuenta, $objPersona, $saldoActual, $interesAnual){
        $this->numCuenta = $numCuenta;
        $this->objPersona = $objPersona;
        $this->saldoActual = $saldoActual;
        $this->interesAnual = $interesAnual;
    }

    public function getNumCuenta(){
        return $this->numCuenta;
    }
    public function getObjPersona(){
        return $this->objPersona;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setNumCuenta($numCuenta){
        $this->numCuenta = $numCuenta;
    }
    public function setObjPersona($objPersona){
        $this->objPersona = $objPersona;
    }
    public function setSaldoActual($saldoActual){
        $this->saldoActual = $saldoActual;
    }
    public function setInteresAnual($interesAnual){
        $this->interesAnual = $interesAnual;
    }

    public function actualizarSaldo(){
        $saldo = $this->getSaldoActual();
        $interes = $this->getInteresAnual();

        $actualizar = ($saldo + ($interes / 365));

        $this->setSaldoActual($actualizar);
    }

    public function depositar($cant){
        $saldo = $this->getSaldoActual();

        $depositar = ($saldo + $cant);

        $this->setSaldoActual($depositar);
    }

    public function retirar($cant){
        $saldo = $this->getSaldoActual();

        if($saldo > 0){
            $retirar = ($saldo - $cant);
            $this->setSaldoActual($retirar);
            $mensaje = "Se retiró con exito.";
        } else {
            $mensaje = "No hay saldo suficiente.";
        }
        return $mensaje;
    }

    public function __toString(){
        return "Número de cuenta: ". $this->getNumCuenta(). "\n". 
               "Cliente: ". $this->getObjPersona(). "\n". 
               "Salado actual: ". $this->getSaldoActual(). "\n". 
               "Interes anual: ". $this->getInteresAnual(). "\n";
    }
}