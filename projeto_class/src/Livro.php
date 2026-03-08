<?php

namespace Romulo\Bliblioteca;

class Livro implements ItensBiblioteca
{
    private bool $disponivel = true;

    function __construct(private string $titulo, private string $autor){}


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

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }


}