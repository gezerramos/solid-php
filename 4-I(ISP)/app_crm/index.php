<?php

require __DIR__ . "/vendor/autoload.php";

use app\dao\ContratoModel;
use app\dao\LeadModel;
use app\dao\UsuarioModel;


$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br';
