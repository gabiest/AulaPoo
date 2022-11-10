<?php
if (!isset($_GET["altura"])) $_GET["altura"] = 0;
if (!isset($_GET["raio"])) $_GET["raio"] = 0;

$alt = (double) $_GET["altura"];
$raio = (double) $_GET["raio"];
$elv = pow($raio,2);

$vol = pi()*$elv*$alt;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo de Volume</title>
</head>
<body>
  <form action="7C.php"method="GET">
    <h1>Digite a Altura e Raio para calcular o Volume</h1>
    <span>Altura (apenas numeros)</span>
    <input type="text" name="altura">
    <span>Raio (apenas numeros)</span>
    <input type="text" name="raio">

    <input type="submit" value="Enviar">
      <br><br><br>
      <?php echo "O Volume é: {$vol}"; ?>
  </form>
  
</body>
</html>