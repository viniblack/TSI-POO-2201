<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Clientes</title>
</head>

<body>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Total de Ativos</th>
        <th>Ver Carteira</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($clientes as $cliente) :
        echo "
          <tr>
            <td>{$cliente['id']}</td>
            <td>{$cliente['name']}</td>
            <td>{$cliente['totalAtivos']}</td>
            <td></td>
          </tr>
            ";
      endforeach;
      ?>

    </tbody>
    <tfoot>
      <tr>
        <td>TotaL</td>
        <td><?= count($clientes) ?> clientes</td>
        <td></td>
        <td></td>
      </tr>
    </tfoot>
  </table>

</body>

</html>