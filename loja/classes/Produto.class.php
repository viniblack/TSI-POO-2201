<?php

chdir(__DIR__);
require_once '../interfaces/Crud.interface.php';

class Produto implements Crud
{
  private $id;
  private $nome;
  private $descricao;
  private $preco;
  private $id_categoria;

  public function criar(array $dados): bool
  {
    echo "Criado Produto\n";
    return true;
  }
  public function apagar(int $id): bool
  {
    echo "Apagado Produto\n";
    return true;
  }
  public function editar(int $id, array $dados): bool
  {
    echo "Editado Produto\n";
    return true;
  }
  public function listar(int $id = null): array
  {
    echo "Listado Produto\n";
    return [];
  }
}
