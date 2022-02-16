<?php

interface User {
  public function login();
  public function apagar();
}

class Usuario implements User
{
  private $name = 'nome doido';
  protected $email;


  public function login()
  {
    echo "Hi!";
  }

  public function logout()
  {
    echo "Bye!";
  }

  public function setName($val)
  {
    $this->name = $val;
  }
}

// $vini = new Usuario;
// $vini->setName('vini');

// Só podemos usar :: para coisas 'static' com isso não precisamos estanciar 
// Usuario::login();

class Aluno extends Usuario {
  public function mudaEmail($nome){
    $this->setName($nome);
    $this->name = 'Gui';
  }
}

$coveiro = new Aluno;
$coveiro->logout();