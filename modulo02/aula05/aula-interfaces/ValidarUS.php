<?php

declare(strict_types=1);

class ValidarUS implements Validar
{
    // public function __construct(){}
    public function validarDocumento(string $documento): void
    {
        if (strlen($documento) !== 14) {
            die('Dcoumento USA Invalido');
        }
    }
    
    public function validarNome(string $nome): void{}

    public function validarCodigoPostal(string $codigoPostal): void{}
}