<?php

namespace Romulo\Bliblioteca;

interface ItensBiblioteca
{
    public function marcarComoDisponivel(): void;

    public function marcarComoEmprestado(): void;

    public function estaDisponivel(): bool;

}