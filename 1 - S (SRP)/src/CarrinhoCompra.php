<?php

namespace App;

class CarrinhoCompra
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

  public function adicionarItem(string $item, float $valor)
  {
    array_push($this->itens, ["Item" => $item, "Valor" => $valor]);
    $this->valorTotal += $valor;
    return true;
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
