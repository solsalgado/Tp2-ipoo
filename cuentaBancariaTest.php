<?php 
include_once("cuentaBancaria.php");
include("persona.php");

$objPersona = new Persona("Sol", "Salgado", "DNI", 45888222);
$objCuenta = new CuentaBancaria(3256, $objPersona, 300000, 600);
echo $objCuenta."\n";

echo "-----Actualizar saldo----- \n";
$objCuenta->actualizarSaldo();
echo $objCuenta."\n";

echo "-----Depositar----- \n";
$objCuenta->depositar(200000);
echo $objCuenta."\n";

echo "-----Retirar----- \n";
$retiro = $objCuenta->retirar(40000);
echo $retiro."\n";

echo "-----Datos nuevos----- \n";
echo $objCuenta."\n";