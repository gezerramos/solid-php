<?php

namespace app\interfaces;

use app\componentes\Log;

interface Ilog
{

  public function registrarLog(Log $log);
}
