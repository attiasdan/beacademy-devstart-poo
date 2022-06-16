<?php

// include 'classes/Usuario.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Produto.php';
// include 'classes/Categoria.php';
// include 'classes/Config/Usuario.php'

require 'vendor/autoload.php';

// use Classes\Config\Usuario as UsuarioConfig;
// use Classes\Config\Usuario;
// use Classes\Categoria;

// $us1 = new Classes\Usuario();
// $us1 = new Usuario();

// $c1 = new Categoria();

// $us2 = new UsuarioConfig();

// var_dump($us1);
// var_dump($c1);

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();