<?php

require_once('./Investimento.class.php');
require_once('../interface/Crud.class.php');

class Ativo implements Crud
{
  private int $id;
  private string $nome;

  public function criar(array $dados): bool
  {
    echo "Ativo criado com sucesso!";
    return true;
  }

  public function listar(int $id = null): array
  {
    echo "Ativo listado com sucesso!";
    return [];
  }

  public function editar(int $id, array $dados): bool
  {
    echo "Ativo editado com sucesso!";
    return true;
  }

  public function deletar(int $id): bool
  {
    echo "Ativo deletado com sucesso!";
    return true;
  }
}