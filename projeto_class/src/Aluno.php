<?php

namespace Romulo\Bliblioteca;

class Aluno extends Usuario
{
    private const MAX_LIVROS_EMPRESTADOS = 1;


    public function podePegarLivroEmprestado(): bool
    {
        return count($this->itens) < self::MAX_LIVROS_EMPRESTADOS;
    }

}