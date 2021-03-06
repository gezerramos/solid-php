<?php

require __DIR__ . "/vendor/autoload.php";

use src\Leitor;

$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/files');
$leitorTXT->setArquivo('dados.txt');
$arrleitorTXT = $leitorTXT->lerArquivo();

$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/files');
$leitorCSV->setArquivo('dados.csv');
$arrleitorCSV = $leitorCSV->lerArquivo();

//---------------------Merge entre TXT e CSV ------------

echo "<pre>";
print_r(array_merge($arrleitorCSV, $arrleitorTXT));
echo "</pre>";
