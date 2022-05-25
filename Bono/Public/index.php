<?php

require_once '../Models/Cliente.class.php';
require_once '../Models/Investimento.class.php';

class Main
{
  private Cliente $clientes;


  public function __construct()
  {
    $this->clientes = new Cliente;

    $this->listarClientes();
  }

  public function listarClientes()
  {
    $clientes = $this->clientes->listar() ?? [];

    foreach ($clientes as $ind => $cliente) {
      $carteira = $this->clientes->carteira($cliente['id']);
      $totalAtivos = 0;
      foreach ($carteira as $cadaAtivo) {
        $totalAtivos += $cadaAtivo['qtd'];
      }
      $clientes[$ind]['totalAtivos'] = $totalAtivos;
    }

    require_once '../Views/cliente.listar.php';
  }
}
new Main;
