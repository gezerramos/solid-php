<?php

require __DIR__ . '/vendor/autoload.php';

use src\Poligono;
use src\poligonos\Retangulo;
use src\poligonos\Quadrado;

 //---------------------Retângulo ------------
$poligono = new Poligono();

$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do retângulo: '.$poligono->getArea().' </h3>';


//---------------------Quadrado ------------
$quadrado = new Poligono();

$quadrado->setForma(new Quadrado());
$quadrado->getForma()->setAltura(5);
$quadrado->getForma()->setLargura(10);

echo '<pre>';
print_r($quadrado);
echo '</pre>';
echo '<h3>Área do quadrado: '.$quadrado->getArea().' </h3>';



/* //---------------------Retângulo ------------
$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do retângulo: '.$retangulo->getArea().' </h3>';

//---------------------Quadrado ------------
$quadrado = new Quadrado();
//$quadrado->setAltura(5);
$quadrado->setLargura(15);
echo '<h3>Área do quadrado: '.$quadrado->getArea().' </h3>';

//---------------------Teste com princípio de Liskov ------------
$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do retângulo: '.$retangulo->getArea().' </h3>'; */
