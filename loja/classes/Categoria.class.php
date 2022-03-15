<?php

chdir(__DIR__);
require_once '../interfaces/Crud.interface.php';

class Categoria implements Crud
{
  private $id;
  private $nome;

  public function criar(array $dados): bool
  {
    echo "\nCriado Categoria\n";
    return true;
  }
  public function apagar(int $id): bool
  {
    echo "\nApagado Categoria\n";
    return true;
  }
  public function editar(int $id, array $dados): bool
  {
    echo "\nEditado Categoria\n";
    return true;
  }
  public function listar(int $id = null): array
  {
    echo "\nListado Categoria\n";
    return [];
  }
}
