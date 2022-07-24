<?php

namespace app\dao;

use app\DB;
use app\interfaces\ICadastro;
use app\interfaces\INotificacao;
use app\componentes\Notificacao;

class LeadModel extends DB implements ICadastro, INotificacao
{

  public function salvar()
  {
  }
  public function enviarNotificacao(Notificacao $notificacao)
  {
  }
}
