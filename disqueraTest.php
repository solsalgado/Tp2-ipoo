<?php 
include_once("disquera.php");
include("persona.php");

$arrayHoraDesde = ["hora" => 9, "minutos" => 30];
$arrayHoraHasta = ["hora" => 21, "minutos" => 30];

$objPersona = new Persona("Sol","Salgado", "DNI", 23555333);
$objDisquera = new Disquera($arrayHoraDesde, $arrayHoraHasta, "Abierto", "123", $objPersona);
echo $objDisquera;

echo "----Dentro horario de atencion---- \n";
$horarioA = $objDisquera->dentroHorarioAtencion(10, 00);
if($horarioA == true){
    echo "Abierto \n";
} else{
    echo "Cerrado \n";
}

echo "----Abrir disquera---- \n";
$objDisquera->abrirDisquera(9, 30);
echo $objDisquera. "\n";

echo "----Cerrar disquera---- \n";
$objDisquera->cerrarDisquera(20, 30);
echo $objDisquera. "\n";