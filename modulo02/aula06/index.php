<?php

// include 'classes/Usuario.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Produto.php';
// include 'classes/Categoria.php';
// include 'classes/Config/Usuario.php'

require 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;

$us1 = new Classes\Usuario();
$us2 = new UsuarioConfig();

var_dump($us1);
var_dump($us2);