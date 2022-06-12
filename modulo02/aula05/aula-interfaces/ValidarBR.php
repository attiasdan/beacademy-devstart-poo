<?php

declare(strict_types=1);

class ValidarBR implements Validar
{
    // public function __construct(){}
    public function validarDocumento(string $documento): void
    {
        if (strlen($documento) !== 11) {
            die('CPF inválido');
        }
    }
    
    public function validarNome(string $nome): void{}

    public function validarCodigoPostal(string $codigoPostal): void{}

}