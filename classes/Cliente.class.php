<?php

require_once('../interface/Crud.class.php');

class Cliente implements Crud
{
  private int $id;
  private string $nome;
  private string $telefone;

  public function criar(array $dados): bool
  {
    echo "Cliente criado com sucesso!";
    return true;
  }

  public function listar(int $id = null): array
  {
    echo "Cliente listado com sucesso!";
    return [];
  }

  public function editar(int $id, array $dados): bool
  {
    echo "Cliente editado com sucesso!";
    return true;
  }

  public function deletar(int $id): bool
  {
    echo "Cliente deletado com sucesso!";
    return true;
  }

}
