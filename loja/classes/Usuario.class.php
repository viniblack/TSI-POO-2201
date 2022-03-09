<?php 

chdir(__DIR__);
require_once '../interfaces/Crud.interface.php';
require_once '../interfaces/Usuario.interface.php';

class Usuario implements Crud, Usuario
 {
  private $email;
  private $nome;
  private $id;
  private $senha;
  private $id_perfil;

  public function criar(array $dados): bool
  {
    echo "\nCriado Usuario\n";
    return true;
  }
  public function apagar(int $id): bool
  {
    echo "\nApagado Usuario\n";
    return true;
  }
  public function editar(int $id, array $dados): bool
  {
    echo "\nEditado Usuario\n";
    return true;
  }
  public function listar(int $id = null): array
  {
    echo "\nListado Usuario\n";
    return [];
  }

  public function acao(array $id_perfil):bool{
    echo "Ação genérica para usuários";
    return true;
  }
}