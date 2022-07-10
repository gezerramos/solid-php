<?php

namespace src;

use src\Arquivo;

class Leitor
{

  private $diretorio;
  private $arquivo;


  private function getDiretorio(): string
  {
    return $this->diretorio;
  }

  private function getArquivo(): string
  {
    return $this->arquivo;
  }

  public function setDiretorio(string $diretorio):void
  {
     $this->diretorio  =  $diretorio;
  }

  public function setArquivo(string $arquivo):void
  {
   $this->arquivo = $arquivo;
  }

  public function lerArquivo()
  {

    
    $caminho = $this->getDiretorio().'/'.$this->getArquivo();
    $arquivo = new Arquivo();
    $extensão = explode('.',$this->getArquivo());

    if ($extensão[1] == 'csv') {
      $arquivo->lerArquivoCSV($caminho);
    }

    if ($extensão[1] == 'txt') {
      $arquivo->lerArquivoTXT($caminho);
    }    

   return $arquivo->getDados();
  }
}
