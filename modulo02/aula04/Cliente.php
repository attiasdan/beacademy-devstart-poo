<?php

declare(strict_types=1);

class Cliente extends Usuario
{
    private string $dataCadastro;

    public function setDataCadastro(string $data): void
    {
        $this->$dataCadastro = $data;
    }
}
