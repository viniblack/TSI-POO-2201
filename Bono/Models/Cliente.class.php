<?php

require_once __DIR__ . '/Model.class.php';

class Cliente extends Model
{
  public function __construct()
  {
    parent::__construct();

    $this->tabela = 'cliente';
  }

  function inserir(array $dados): ?int
  {
    return null;
  }

  function atualizar(int $id, array $dados): bool
  {
    return true;
  }

  function apagar(int $id): bool
  {
    return true;
  }

  function listar(int $id = null): ?array
  {
    return null;
  }
}
