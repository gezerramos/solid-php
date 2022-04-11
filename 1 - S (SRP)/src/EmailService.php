<?php

namespace App;

class EmailService
{

  private $de;
  private $para;
  private $assunto;
  private $conteudo;

  public function __construct(
    string $de = "suporte@site.com",
    string $para = "",
    string $assunto = "",
    string $conteudo = ""
  ) {
    $this->de = $de;
    $this->para = $para;
    $this->assunto = $assunto;
    $this->conteudo = $conteudo;
  }

  public static function enviarEmailConfirmação()
  {
    return  "____ Envia email _____";
  }
}
