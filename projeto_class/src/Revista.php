<?php

namespace Romulo\Bliblioteca;

class Revista implements ItensBiblioteca

{
    private bool $disponivel = true;

    function __construct(private string $titulo, private string $autor) {}


    public function marcarComoDisponivel(): void
    {
        $this->disponivel = true;
    }

    public function marcarComoEmprestado(): void
    {
        $this->disponivel = false;
    }

    public function estaDisponivel(): bool
    {
        return $this->disponivel;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

}