<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../Model/Crud.class.php');

class Cliente implements Crud
{
  public function __construct($array)
  {
    $this->name = $array['name'];
    $this->phone = $array['phone'];
  }

  private int $id;
  private string $nome;
  private string $telefone;

  public function criar(array $dados): bool
  {
    $stmt = $this->bd->prepare("INSERT INTO cliente (name, phone) VALUES (:name, :phone)");

    if ($stmt->execute(['name' => $this->name, 'phone' => $this->phone])) {
      echo  "Gravado com sucesso";
      return true;
    } else {
      echo "Não gravou";
      return false;
    }
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

$_POST;
die;
