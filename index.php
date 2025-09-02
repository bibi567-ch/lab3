<?php

require_once 'Autor.php';
require_once 'Libro.php';
require_once 'Revista.php';
require_once 'ImprimirAutor.php';

$autor1 = new Autor("Elena", "White", 45);
$autor2 = new Autor("Juan", "Pérez", 38);

$libro1 = new Libro("PHP Avanzado", $autor1);
$libro2 = new Libro("POO en PHP", $autor2);
$revista1 = new Revista("Byte Magazine", $autor1);
$revista2 = new Revista("DevZone", $autor2);

$publicaciones = [$libro1, $libro2, $revista1, $revista2];

foreach ($publicaciones as $pub) {
    echo $pub->getInfo() . "\n";
}

$imprimir = new ImprimirAutor();
echo $imprimir->getInfo($autor1) . "\n";