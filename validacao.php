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
  <form action="validacao.php" method="post">
    <?php
    $placa = $_POST['placa'];

    $placa = str_replace("-", "", $placa);
    $placa = str_replace(" ", "", $placa);
    $placa = strtoupper($placa);
    echo "<h1>Placa informada: ". $placa . "</h1><br>";

    function verifica($num)
    {
      for ($x = 0; $x <= 9; $x++) {
        if ($num == "0" or $num == "1" or $num == "2" or $num == "3" or $num == "4" or $num == "5" or $num == "6" or $num == "7" or $num == "8" or $num == "9") {
          return "numero";
        } else {
          return "string";
        }
      }
    }

    $tipos = array();
    for ($i = 0; $i < strlen($placa); $i++) {
      if (verifica($placa[$i]) == "numero") {
        array_push($tipos, "numero");
      } else {
        array_push($tipos, "string");
      }
    }

    $modelo = "";
    if (strlen($placa) != 7) {
      echo "Placa deve ter menos de 7 digitos";
      echo "<a href='index.php'>Voltar</a>";
    } else {
      if ($tipos[3] == "numero" and $tipos[4] == "string") {
        echo "<h4 style='color: chartreuse'>Placa modelo antigo!</h4><br>";
        $modelo = "Antigo";
        echo "<a href='cadastrar.php'>Prosseguir</a>";
        echo "<a href='index.php'>Voltar</a>";
      } elseif ($tipos[3] == "string" and $tipos[4] == "numero") {
        echo "<h4 style='color: chartreuse'>Placa modelo Mercosul</h4><br>";
        $modelo = "Mercosul";
        echo "<a href='cadastrar.php'>Prosseguir</a>";
        echo "<a href='index.php'>Voltar</a>";
      } else {
        echo "<h4 style='color: red'>Placa Invalida</h4><br>";
        echo "<a href='index.php'>Voltar</a>";
      }
    }

    session_start();
    $_SESSION['placa'] = $placa;
    $_SESSION['tipo'] = $modelo;

    // echo "<br>";

    // for ($z = 0; $z < count($tipos); $z++) {
    //   echo $z ."-". $tipos[$z] . "<br>";
    // }
    ?>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>