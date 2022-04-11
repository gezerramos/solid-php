<?php
require __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;


$carrinho1 = new CarrinhoCompra();


print_r($carrinho1->exibirItens());
echo "<br/> Status: ".$carrinho1->exibirStatus();
echo "<br/>Valor total: ".$carrinho1->exibirValorTotal();
echo "<br/>";
echo "#################################################";


 $carrinho1->adicionarItem("Bicicleta", 1500.20);
$carrinho1->adicionarItem("Geladeira", 3500.85);
$carrinho1->adicionarItem("Tapete", 65.30); 

echo "<br/>";
print_r($carrinho1->exibirItens());
echo "<br/>Valor total: ".$carrinho1->exibirValorTotal();
echo "<br/> Status: ".$carrinho1->exibirStatus();
if ($carrinho1->confirmarPedido()) {
  echo "<br/>Pedido realizado com sucesso.";
}else{
  echo "<br/>Erro na confirmação do pedido. Carrinho esta vazio.";
}
echo "<br/> Status: ".$carrinho1->exibirStatus();
echo "<br/>";
echo "#################################################";
