<?php

require_once 'Autor.php';
require_once 'IPublicable.php';

class Revista implements IPublicable {
    public string $titulo;
    public Autor $autor;

    public function __construct(string $titulo, Autor $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getInfo(): string {
        return "Revista: {$this->titulo}, Autor: {$this->autor->getNombreCompleto()}";
    }
}