<?php
require __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao("Micro-ondas");
$item1->setValor(650.50);


$item2->setDescricao("AirFryer");
$item2->setValor(380.20);


echo '<b>Pedido sem itens</b></br>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

if ($item1->itemValido()) {
  $pedido->getCarrinhoCompra()->adicionarItem($item1);
} else {
  echo 'existe item1 inválido<br/>';
}

if ($item2->itemValido()) {
  $pedido->getCarrinhoCompra()->adicionarItem($item2);
} else {
  echo 'existe item2 inválido<br/>';
}



echo '<b>Pedido com itens</b></br>';
echo '<pre>';
print_r($pedido);
echo '</pre>';


echo '</br>---Acesso descrição de itens: ';

foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $value) {
  echo '</br>Produco: '.$value->getDescricao();
  echo ' - Valor: '.$value->getValor();
}

echo '<b></br>Itens do carrinho</b></br>';
$item = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
  $item +=  $item->getValor();
}
echo 'Total: ' . $item;

echo '</br> Carrinho valído?</br>' . $pedido->getCarrinhoCompra()->validarCarrinho();

echo '</br>Satatus do pedido?</br>' . $pedido->getStatusPedido();

echo '</br>Confirmar pedido</br>' . $pedido->confirmarPedido();

echo '</br>Satatus do pedido?</br>' . $pedido->getStatusPedido();

echo '</br>' . EmailService::enviarEmailConfirmação();

