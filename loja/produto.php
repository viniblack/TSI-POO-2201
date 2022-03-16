<?php

require_once './classes/Produto.class.php';

class Main
{
  private $produto;

  public function __construct()
  {
    $this->produto = new Produto;

    $vetor = [];

    $this->novo($vetor);
  }

  function novo($vetor): void
  {
    if (is_array($vetor)) {
      $this->produto->criar($vetor);
    } else {
      throw "Erro";
    }
  }

  public function __destruct()
  {
    echo "Destrutor Executado";
  }
}

$main = new Main;

// $boneco = new Produto;

// $boneco->criar(['boneco', 12.99]);
// $boneco->apagar(1);
// $boneco->editar(1, ['boneco top', 15.99]);
// $boneco->listar();
