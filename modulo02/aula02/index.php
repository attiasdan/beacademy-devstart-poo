<?php

include 'Produto.php';

$p1 = new Produto('Tenis', 299);
// $p1->setNome('Tenis para corrida');
// $p1->setValor(299);

$p2 = new Produto('Saia Jeans', 100);
// $p2->setNome('Calça Jeans');
// $p2->setValor(-100);

$p3 = new Produto('Calça Branca', 159.78);

var_dump($p1);
var_dump($p2);
var_dump($p3);