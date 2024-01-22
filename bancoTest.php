<?php 
include("banco.php");
include("mostrador.php");
include("tramite.php");

$objTramite1 = new Tramite("9:30", "12:30", "beca");
$objTramite2 = new Tramite("9:30", "12:30", "jubilacion");
$objTramite3 = new Tramite("9:30", "12:30", "credito");
$tramites1 =[];
$tramites1 = [$objTramite1, $objTramite2, $objTramite3];

$objTramite4 = new Tramite("9:30", "12:30", "beca");
$objTramite5 = new Tramite("9:30", "12:30", "jubilacion");
$objTramite6 = new Tramite("9:30", "12:30", "cuenta corriente");
$tramites2 =[];
$tramites2 = [$objTramite4, $objTramite5, $objTramite6];

$objTramite7 = new Tramite("9:30", "12:30", "beca");
$objTramite8 = new Tramite("9:30", "12:30", "caja de ahorro");
$objTramite9 = new Tramite("9:30", "12:30", "cuenta corriente");
$tramites3 =[];
$tramites3 = [$objTramite7, $objTramite8, $objTramite9];


$mostrador1 = new Mostrador($tramites1, 47);
$mostrador2 = new Mostrador($tramites2, 35);
$mostrador3 = new Mostrador($tramites3, 50);
$mostradores = [];
$mostradores = [$mostrador1, $mostrador2, $mostrador3];

$objBanco = new Banco($mostradores);

echo $objBanco;

echo "----Atiende---- \n";
$atienteTramite = $mostrador1->atiende("beca");
if($atienteTramite == true){
    $mensaje = "atiende. \n";
} else {
    $mensaje = "este mostrador no atiende este tramite. \n";
}
echo $mensaje. "\n";

echo "----Mostradores que atienden---- \n";
$mostradoresBanco = $objBanco->mostradoresQueAtienden("jubilacion");
echo $mostradoresBanco. "\n";

echo "----Mejor mostrador---- \n";
$mejorMostrador = $objBanco->mejorMostradorPara("jubilacion");
echo $mejorMostrador. "\n";

echo "----Atender---- \n";

$clientes = [];
$clientes[0] = ["cliente" => 1, "tramite" => "beca"];
$clientes[1] = ["cliente" => 2, "tramite" => "jubilacion"];
$clientes[2] = ["cliente" => 3, "tramite" => "caja de ahorro"];

$atender = $objBanco->atender($clientes[1]);
echo $atender;
