<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '123123123';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($cpf);

echo 'Funcionou';