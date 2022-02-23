<?php

interface User
{
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

  public function apagar()
  {
    echo "apagado!";
  }

  public function logout()
  {
    echo "Bye!";
  }

  public function setName($val)
  {
    $this->name = $val;
  }

  public function getNome()
  {
    return $this->nome;
  }
}

// $vini = new Usuario;
// $vini->setName('vini');

// Só podemos usar :: para coisas 'static' com isso não precisamos estanciar 
// Usuario::login();

class Professor extends Usuario
{
  public function mudaEmail($nome)
  {
    $this->setName($nome);
    $this->name = 'Gui';
  }
  public function mudaNome()
  {
    $this->nome = 'Rodrigo coveiro';
  }
}

class Turma
{
  private $professor;

  // Aqui estamos fazendo uma dependencia da classe Professor
  public function setProfessor(Professor $prof)
  {
    $this->professor = $prof;
  }
}

$coveiro = new Professor;
// $coveiro->logout();
$coveiro->mudaNome();
echo $coveiro->getNome();
