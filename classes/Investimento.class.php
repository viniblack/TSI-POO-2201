<?php

require_once('../interface/Crud.class.php');
require_once('./Cliente.class.php');

class Investimento implements Crud
{
  private int $id;
  private int $qtd;
  private int $idAtivo;
  private int $idCliente;

  public function criar(array $dados): bool
  {
    echo "Investimento criado com sucesso!";
    return true;
  }

  public function listar(int $id = null): array
  {
    echo "Investimento listado com sucesso!";
    return [];
  }

  public function editar(int $id, array $dados): bool
  {
    echo "Investimento editado com sucesso!";
    return true;
  }

  public function deletar(int $id): bool
  {
    echo "Investimento deletado com sucesso!";
    return true;
  }
}