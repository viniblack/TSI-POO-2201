<?php
class Sessao
{
  private $id_usuario;
  private $dispositivo;
  private $localizacao;
  private $ult_atualização;
  private $id;

  public function login()
  {
    echo "Login efetuado";
  }
  public function destruir()
  {
    echo "Sessão destruida";

  }
  public function logout()
  {
    echo "Logout efetuado";

  }
  public function atualizar()
  {
    echo "Sessão atualizada";

  }
}
