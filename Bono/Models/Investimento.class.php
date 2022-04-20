<?php

require_once __DIR__ . '/Model.class.php';

class Investimento extends Model
{
  public function __construct()
  {
    parent::__construct();

    $this->tabela = 'investimento';
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
