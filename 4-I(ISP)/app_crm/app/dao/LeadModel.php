<?php

namespace app\dao;

use app\BD;
use app\interfaces\ICadastro;
use app\interfaces\INotificacao;
use app\componentes\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao
{

  public function salvar()
  {
  }
  public function enviarNotificacao(Notificacao $notificacao)
  {
  }
}
