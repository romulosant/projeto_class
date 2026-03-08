<?php

namespace Romulo\Bliblioteca;

class Visitante extends Usuario
{

    public function podePegarLivroEmprestado(): bool
    {
        return false;
    }
}