<?php 
include_once("lectura2.php");
include("libro.php");
include("persona.php");

$objPersona = new Persona("sol", "salgado", "dni", 66555444);
$objPersona2 = new Persona("rodrigo", "pere", "dni", 11222333);

$objLibro1 = new Libro(345, "abc", "abcdario", 2024, "sol", 56, $objPersona);
$objLibro2 = new Libro(678, "def", "abcdario 2", 2025, "comp", 45, $objPersona2);

$librosLeidos = [];
$librosLeidos = [$objLibro1, $objLibro2];

$objLectura = new Lectura($librosLeidos, 30);

echo $objLectura;

echo "---Libro leido--- \n";
$libroLeido = $objLectura->libroLeido("abc");
echo $libroLeido. "\n";

echo "---Dar sipnosis--- \n";
$sipnosis = $objLectura->darSipnosis("abc");
echo $sipnosis. "\n";

echo "---Leidos segun año--- \n";
$anioEdicion = $objLectura->leidosAnioEdicion(2024);
echo $anioEdicion. "\n";

echo "---Libros por autor--- \n";
$libroAutor = $objLectura->darLibrosPorAutor("sol");
echo $libroAutor. "\n";

/*echo "---Siguiente página--- \n";
$sigPag = $objLectura->siguientePagina();
echo $sigPag ."\n";

echo "---Página anterior--- \n";
$pagAnterior = $objLectura->retrocederPagina();
echo $pagAnterior."\n"; 

echo "---Ir a pagina--- \n";
$irPagina = $objLectura->irAPagina(40);
echo $irPagina."\n";

echo $objLectura;*/