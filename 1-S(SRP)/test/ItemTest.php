<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase
{

  //methods test
  public function testEstadoInicialItem()
  {

    $item = new Item();

    $this->assertEquals('',  $item->getDescricao());
    $this->assertEquals(0,  $item->getValor());
  }

  public function testGetSetDescricao()
  {
    $descricao = 'cadeira de plástico';
    $item = new Item();
    $item->setDescricao($descricao);
    $this->assertEquals($descricao,  $item->getDescricao());
  }
  /**
   * @dataProvider dataValores
   */
  public function testGetSetValor($valor)
  {
    // $valor = 35;
    $item = new Item();
    $item->setValor($valor);
    $this->assertEquals($valor,  $item->getValor());
  }
  public function testIemValdiado()
  {

    $item = new Item();
    //submeter um item válido par ao teste e retornar ok
    $item->setValor(35);
    $item->setDescricao('Estamos testando descrição');
    $this->assertEquals(true, $item->itemValido());

    //submeter um item inválido para o teste e retornar false(descrição)
    $item->setValor(35);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());

    //submeter um item inválido par ao teste e retornar false(valor)
    $item->setValor(0);
    $item->setDescricao('Estamos testando descrição');
    $this->assertEquals(false, $item->itemValido());

    //submeter um item valdiado
    $item->setValor(0);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());
  }

  //providers
  public function dataValores()
  {
    return [
      [35],
      [-5],
      [0],
    ];
  }
}
