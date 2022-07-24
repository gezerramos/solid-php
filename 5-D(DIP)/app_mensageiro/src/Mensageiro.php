<?php

namespace src;

use src\Email;

class Mensageiro
{

  private $canal;

  public function getCanal(): string
  {
    return $this->canal;
  }

  public function setCanal(string $canal): void
  {
    $this->canal = $canal;
  }
  public function enviarToken(): void
  {
    $class = '\src\\'. ucfirst($this->getCanal());
    echo $class;
    $obj = new $class;
    $obj->enviar();
  }
}
