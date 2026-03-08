<?php

namespace Romulo\Bliblioteca;

class Bibliotecario
{
    public function emprestarItem(Usuario $usuario, ItensBiblioteca $itensBiblioteca, Estante $estante): bool
    {
        if (!$itensBiblioteca->estaDisponivel()) {
            return false;
        }

        if (!$usuario->podePegarLivroEmprestado()) {
            return false;
        }

        if ($estante->buscarItens($itensBiblioteca->getTitulo()) === null) {
            return false;
        }

        $itensBiblioteca->marcarComoEmprestado();
        $usuario->adicionarItemEmprestado($itensBiblioteca);
        $estante->removerItem($itensBiblioteca);
        return true;
    }


    public function devolverItem(Usuario $usuario, ItensBiblioteca $itensBiblioteca, Estante $estante): bool
    {

        if ($itensBiblioteca->estaDisponivel()) {
            return false;
        }
        if ($estante->buscarItens($itensBiblioteca->getTitulo()) !== null) {
            return false;
        }
        $usuario->removerItemEmprestado($itensBiblioteca);
        $estante->adicionarItem($itensBiblioteca);
        $itensBiblioteca->marcarComoDisponivel();
        return true;

    }


}