<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno();
$a1->nome = 'Alessandro';
$a1->cpf = '123.123.123-12';

$a1->nome .= ' Feitoza';

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender o basico e intermediario do PHP';

echo "<h1>Aluno: {$a1->nome}</h1>";