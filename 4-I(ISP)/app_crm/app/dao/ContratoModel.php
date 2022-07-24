<?php

namespace app\dao;

use app\DB;
use app\interfaces\ICadastro;
use app\componentes\Log;
use app\componentes\Notificacao;

class ContratoModel extends DB implements ICadastro
{

  public function salvar()
  {
  }
  public function registrarLog(Log $log)
  {
  }
  public function enviarNotificacao(Notificacao $notificacao)
  {
  }
}
