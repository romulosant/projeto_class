<?php

namespace Romulo\Bliblioteca;

class Professor extends Usuario

{
    private  const MAX_LIVROS_EMPRESTADOS = 3;

    public function podePegarLivroEmprestado(): bool
    {
        return count($this->livrosEmprestados) < self::MAX_LIVROS_EMPRESTADOS;
    }



}