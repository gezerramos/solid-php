<?php

require __DIR__ . "/vendor/autoload.php";

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\Whatsapp;


//-------canal e-mail
$msgMail = new Mensageiro(new Email());
$msgMail->enviarToken();
echo "</br>";

//-------canal sms
$msgSms = new Mensageiro(new Sms());
$msgSms->enviarToken();
echo "</br>";

//-------canal whatsapp
$msgSms = new Mensageiro(new Whatsapp());
$msgSms->enviarToken();
echo "</br>";

/* //-------canal e-mail
$msgMail = new Mensageiro();
$msgMail->setCanal('email');
$msgMail->enviarToken();
echo "</br>";

//-------canal sms
$msgSms = new Mensageiro();
$msgSms->setCanal('sms');
$msgSms->enviarToken();
echo "</br>"; */