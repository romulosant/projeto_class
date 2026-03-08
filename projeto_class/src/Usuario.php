<?php

namespace Romulo\Bliblioteca;

abstract class Usuario
{
    protected string $nome;

    protected array $itens = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    abstract function podePegarLivroEmprestado(): bool;

    public function adicionarItemEmprestado(ItensBiblioteca $item): void
    {
        if ($this->podePegarLivroEmprestado() === true) {
            $this->itens[] = $item;
        } else {
            throw new \Exception("usuario nao pode pegar livro mas esta tentando");
        }
    }

    public function removerItemEmprestado(ItensBiblioteca $item): void
    {
        $this->itens = array_filter(
            $this->itens,
            fn($l) => $l !== $item
        );
    }


    public function listarItensEmprestados() : array
    {
        return $this->itens;
    }

}