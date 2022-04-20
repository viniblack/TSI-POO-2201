
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cliente</title>
</head>

<body>
  <h1>Cliente</h1>
  <form method="post" action="../Controller/Cliente.controller.php">
    <label for="name">Nome do cliente</label>
    <input name="name" id="name" type="text">

    <label for="phone">Número do cliente</label>
    <input  name="phone" id="phone" type="tel">

    <button type="submit">Enviar dados</button>
  </form>
</body>

</html>