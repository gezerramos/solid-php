<?php

namespace app\interfaces;

use app\componentes\Notificacao;

interface INotificacao
{
  public function enviarNotificacao(Notificacao $notificacao);
}
