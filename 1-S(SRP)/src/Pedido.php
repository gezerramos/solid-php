<?php

namespace App;
use App\CarrinhoCompra;


class Pedido
{
  private $status;
  private $carrinhoCompra;
  private $valorTotalPedido;


  public function __construct()
  {
    $this->status = "Aberto";
    $this->carrinhoCompra = new CarrinhoCompra();
    $this->valorTotalPedido = 0;
  }

  public function getCarrinhoCompra()
  {
    return $this->carrinhoCompra;
  }

  public function getStatusPedido()
  {
    return $this->status;
  }
  public function setStatusPedido(string $status)
  {
    $this->status = $status;
  }

  public function confirmarPedido()
  {
    if ($this->carrinhoCompra->validarCarrinho()) {
      $this->setStatusPedido("Confirmado");
      return true;
    }

    return false;
  }
}
