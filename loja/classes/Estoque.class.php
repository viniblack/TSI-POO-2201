<?php

chdir(__DIR__);
require_once '../interfaces/Crud.interface.php';

class Estoque implements Crud
{
  private $id;
  private $qtd;
  private $local;
  private $limite_min;
  private $id_produto;
  private $produto;

  public function __construct(Produto $objProd = null)
  {
    if(is_object($objProd)){
      $this->produto = $objProd;
    }
  }

  public function criar(array $dados): bool
  {
    echo "\nCriado Estoque\n";
    return true;
  }
  public function apagar(int $id): bool
  {
    echo "\nApagado Estoque\n";
    return true;
  }
  public function editar(int $id, array $dados): bool
  {
    echo "\nEditado Estoque\n";
    return true;
  }
  public function listar(int $id = null): array
  {
    echo "\nListado Estoque\n";
    return [];
  }

  public function avisoLimiteMin(){
    echo "\nAviso de produto no limite\n";
    return true;
  }
}
