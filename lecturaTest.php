<?php 
include_once("lectura.php");
include_once("libro.php");
include("persona.php");

$objPersona = new Persona("sol", "salgado", "dni", 66555444);
$objLibro = new Libro(345, "abc", "abcdario", 2024, "sol", 56, $objPersona);
$objLectura = new Lectura($objLibro, 30);

echo $objLectura;

echo "---Siguiente página--- \n";
$sigPag = $objLectura->siguientePagina();
echo $sigPag ."\n";

echo "---Página anterior--- \n";
$pagAnterior = $objLectura->retrocederPagina();
echo $pagAnterior."\n"; 

echo "---Ir a pagina--- \n";
$irPagina = $objLectura->irAPagina(40);
echo $irPagina."\n";

echo $objLectura;