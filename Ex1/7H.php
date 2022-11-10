<?php
if (!isset($_GET["comprimento"])) $_GET["comprimento"] = 0;
if (!isset($_GET["largura"])) $_GET["largura"] = 0;
if (!isset($_GET["altura"])) $_GET["altura"] = 0;


$comprimento = (double) $_GET["comprimento"];
$largura = (double) $_GET["largura"];
$altura = (double) $_GET["altura"];

$volume = $comprimento *$largura*$altura;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo de volume</title>
</head>
<body>
  <form action="7H.php"method="GET">
    <h1>Calcule e apresente o volume de uma caixa retangular,</h1>
    <span>Comprimento</span>
    <input type="text" name="comprimento">
    <span>Largura</span>
    <input type="text" name="largura">
    <span>Altura</span>
    <input type="text" name="altura">

    <input type="submit" value="Enviar">
      <br><br><br>
      <?php echo "Volume:{$volume} "; ?>
  </form>
  
</body>
</html>