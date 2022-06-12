<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquim@email.com', '12345');
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2001');

$g1 = new Gestor('zezim@email.com', '123123', 10000.50);
$g1->setNome('Zezim');

$gg1 = new GestorGeral('maria@email.com', '23234fdf', 8000.50);

// var_dump($c1);
// var_dump($g1);
var_dump($gg1);