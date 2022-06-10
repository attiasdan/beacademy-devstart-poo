<?php

include 'Produto.php';

$p1 = new Produto();
$p1->alterarNome('Tenis para corrida');
$p1->alterarValor(299);

$p2 = new Produto();
$p2->alterarNome('Calça Jeans');
$p2->alterarValor(-100);

var_dump($p1);
var_dump($p2);