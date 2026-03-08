<?php


namespace Romulo\Bliblioteca;

class Estante
{
    private array $itens = [];

    public function adicionarItem(ItensBiblioteca $itensBiblioteca): void
    {
        $this->itens[] = $itensBiblioteca ;
    }

    public function removerItem(ItensBiblioteca $itensBiblioteca): void
    {
        $this->itens = array_filter(
            $this->itens,
            fn($l) => $l !== $itensBiblioteca
        );
    }
    public function buscarItens(string $titulo): ?ItensBiblioteca
    {
        foreach ($this->itens as $item) {
            if (str_contains(
                strtolower($item->getTitulo()),
                strtolower($titulo)
            )) {
                return $item;
            }
        }
        return null;
    }
    public function listarLivros(): array
    {
        return array_filter($this->itens, function (ItensBiblioteca $itensBiblioteca) {
            return $itensBiblioteca->estaDisponivel();
        });
    }

}