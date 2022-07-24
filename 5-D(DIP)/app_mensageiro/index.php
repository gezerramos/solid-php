<?php

require __DIR__ . "/vendor/autoload.php";

use src\Mensageiro;

//-------canal e-mail
$msgMail = new Mensageiro();
$msgMail->setCanal('email');
$msgMail->enviarToken();
echo "</br>";

//-------canal sms
$msgSms = new Mensageiro();
$msgSms->setCanal('sms');
$msgSms->enviarToken();
echo "</br>";