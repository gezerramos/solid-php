<?php

require __DIR__ . "/vendor/autoload.php";

use src\Leitor;

//---------------------TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/files');
$leitorTXT->setArquivo('dados.txt');
$arrleitorTXT = $leitorTXT->lerArquivo();

//---------------------CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/files');
$leitorCSV->setArquivo('dados.csv');
$arrleitorCSV = $leitorCSV->lerArquivo();

//---------------------XLSX
$leitorXLSX = new Leitor();
$leitorXLSX->setDiretorio(__DIR__ . '/files');
$leitorXLSX->setArquivo('dados.xlsx');
$arrleitorXLSX = $leitorXLSX->lerArquivo();

//---------------------Merge entre TXT, CSV e XLSX ------------

echo "<pre>";
print_r(array_merge($arrleitorCSV, $arrleitorTXT));
echo "</pre>";
