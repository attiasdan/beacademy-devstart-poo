<?php

declare(strict_types=1);

class Produto
{
    private string $nome;
    private float $valor;

    public function pegarNome(): string
    {
        return $this->nome;
    }
    public function alterarNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }
    public function pegarValor(): float
    {
        return $this->valor;
    }
    public function alterarValor(float $novoValor): void
    {
        if ($novoValor < 0) {
            echo 'Ops, valor não pode ser negativo';
            return;
        }
        $this->valor = $novoValor;
    }
}