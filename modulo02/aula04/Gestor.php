<?php

declare(strict_types=1);

class Gestor extends Usuario
{
    private float $salario;
    private string $horario;

    public function __construct(string $email, string $senha, float $salario)
    {
        parent::email = $email;
        parent::senha = $senha;
        $this->$salario = $salario;
    }
}