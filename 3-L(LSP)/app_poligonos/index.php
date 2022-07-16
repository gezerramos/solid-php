<?php

  require __DIR__.'/vendor/autoload.php';

  use src\Retangulo;
  use src\Quadrado;

//---------------------Retângulo ------------
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
echo '<h3>Área do retângulo: '.$retangulo->getArea().' </h3>';