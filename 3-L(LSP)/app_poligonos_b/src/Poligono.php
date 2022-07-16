<?php

namespace src;

//OCP pois as classes quadrado e retângulo tem o calculos em comum 
class Poligono
{

  private $forma;

  public function setForma(object $forma): void
  {
    $this->forma = $forma;
  }

  public function getForma(): object  {
    return $this->forma;
  }

  public function getArea(): float
  {
  return $this->getForma()->getAltura() * $this->getForma()->getLargura();
  }
}
