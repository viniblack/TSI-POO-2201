<?php

require_once 'classes/Estoque.class.php';
require_once 'classes/Produto.class.php';

class Main
{

  private $produto;
  private $estoque;

  public function __construct()
  {
    $this->produto = new Produto;

    $this->produto->criar(['Melancia']);

    $this->estoque = new Estoque($this->produto);
  }
}

new Main();
