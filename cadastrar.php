<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="visualizar.php" method="post">
    <h1>Cadastro da placa</h1>
    <h3>Modelo: <?php
      session_start();
      echo $_SESSION['tipo'];
    ?></h3>
    <h3>Marca: </h3>
    <input type="text" name="marca" autofocus required>
    <h3>Ano de fabricação:</h3>
    <input type="number" max="2023" name="fabri" required>

    <input type="submit" value="Continuar">
    <a href="index.php">Voltar</a>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>