<?php

namespace App;

class CopyCC
{

  //atributos
  private $itens;
  private $status;
  private $valortotal;

  //métodos

  public function __construct()
  {
    $this->itens = [];
    $this->status = "Aberto";
    $this->valorTotal = 0;
  }

  public function exibirItens()
  {
    return $this->itens;
  }

  public function itemValido(string $item, float $valor)
  {
    if ($item == '') {
      return false;
    }
    if ($valor <= 0) {
      return false;
    }
    return true;
  }

  public function adicionarItem(string $item, float $valor)
  {
    if ($this->itemValido($item, $valor)) {
      array_push($this->itens, ["Item" => $item, "Valor" => $valor]);
      $this->valorTotal += $valor;
      return true;
    }
    return false;
  }

  public function exibirValorTotal()
  {
    return $this->valorTotal;
  }

  public function exibirStatus()
  {
    return $this->status;
  }

  public function confirmarPedido()
  {
    if ($this->validarCarrinho()) {
      $this->status = "Confirmado";
      $this->enviarEmailConfirmacao();
      return true;
    }
    return false;
  }

  public function enviarEmailConfirmacao()
  {
    echo "<br/>Email de confirmação enviado!";
  }

  public function validarCarrinho()
  {
    return count($this->itens) > 0;
  }
}
