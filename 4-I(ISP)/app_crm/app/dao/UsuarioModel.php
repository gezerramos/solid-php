<?php

namespace app\dao;

use app\BD;
use app\interfaces\ICadastro;
use app\interfaces\INotificacao;
use app\interfaces\Ilog;

use app\componentes\Log;
use app\componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro,INotificacao,Ilog
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