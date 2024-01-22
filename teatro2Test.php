<?php
include_once("teatro2.php");
include_once("funciones.php");

$funcion1 = new Funciones("toy story 1", 21, 2, 400);
$funcion2 = new Funciones("toy story 2", 9, 1, 500);
$funcion3 = new Funciones("toy story 3", 15, 1, 600);
$funcion4 = new Funciones("toy story 4", 17, 2, 700);

$funciones = [$funcion1, $funcion2, $funcion3, $funcion4];
 
$objTeatro = new Teatro("Osiris", "Av siempre viva", $funciones);
echo $objTeatro. "\n";

echo "----Cambiar nombre teatro y direccion---- \n";
echo "Ingrese el nuevo nombre del teatro: ";
$nNombreT = trim(fgets(STDIN));
echo "Ingrese la nueva direccion del teatro: ";
$nDireccionT = trim(fgets(STDIN));
$objTeatro->cambiarNombre($nNombreT);
$objTeatro->cambiarDireccion($nDireccionT);
echo $objTeatro. "\n";

echo "----Cambiar nombre funcion---- \n";
echo "Ingrese el nombre que desea cambiar: ";
$nombreF = trim(fgets(STDIN));
echo "Ingrese el nuevo nombre de la funcion: ";
$nNombreF = trim(fgets(STDIN));
echo "Ingrese el nuevo precio de la funcion: ";
$nPrecioF = trim(fgets(STDIN));
$cambiarF = $objTeatro->cambiarFuncion($nombreF, $nNombreF, $nPrecioF);
if($cambiarF == true){
    echo "se cambiaron los datos. \n";
}
echo $objTeatro. "\n";

echo "----Cargar funciones---- \n";
echo "Ingrese el nombre del teatro: ";
$nombreT = trim(fgets(STDIN));
echo "Ingrese el nombre de la funcion: ";
$nFuncion = trim(fgets(STDIN));
echo "ingrese el horario de inicio: ";
$horaInicio = trim(fgets(STDIN));
echo "Duracion de la funcion: ";
$duracion = trim(fgets(STDIN));
echo "Precio: ";
$precioF = trim(fgets(STDIN));
$cargarF = $objTeatro->cargarFunciones($nombreT, $nFuncion, $horaInicio, $duracion, $precioF);
if($cargarF == true){
    echo "Se cargó correctamente. \n";
} 
//echo $cargarF. "\n";

echo $objTeatro. "\n";