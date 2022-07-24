<?php

namespace src;


class Email implements IMensagemToken
{

  public function enviar(): void
  {
    echo ' E-email: Seu token é xxx1234';
  }
}
