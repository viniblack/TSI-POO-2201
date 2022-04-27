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
    $stmt = $this->prepare("INSERT INTO cliente (Name, phone) 
                            VALUES (:Name, :phone)");

    $stmt->bindParam(':Name', $dados['Name']);
    $stmt->bindParam(':phone', $dados['phone']);

    if ($stmt->execute()) {
      return $this->lastInsertId();
    } else {
      return false;
    }
  }

  function atualizar(int $id_cliente, array $dados): bool
  {
    $stmt = $this->prepare("UPDATE {$this->tabela} SET 
                              Name = :Name, phone = :phone
                            WHERE id_cliente = :id_cliente");

    $stmt->bindParam(':id_cliente', $id_cliente);
    $stmt->bindParam(':Name', $dados['Name']);
    $stmt->bindParam(':phone', $dados['phone']);

    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function apagar(int $id): bool
  {
    $stmt = $this->prepare(
      "DELETE FROM {$this->tabela}
        WHERE id_cliente = :id_cliente"
    );

    $stmt->bindParam(':id_cliente', $id_cliente);

    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      return true;
    } else {
      echo "nao foi";
      return false;
    }
  }

  function listar(int $id_cliente = null): ?array
  {
    $stmt = $this->prepare("SELECT Name, Phone FROM {$this->tabela}  
                            WHERE id_cliente = :id_cliente");

    $stmt->bindParam(':id_cliente', $id_cliente);

    if ($stmt->execute()) {
      return $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      echo "nao foi";
      return [];
    }
  }
}

$cliente = new Cliente;
echo json_encode($cliente->listar(3));
