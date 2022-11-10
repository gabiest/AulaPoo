<?php
if (!isset($_GET["Tcelsius"])) $_GET["Tcelsius"] = 0;
$c = (int) $_GET["Tcelsius"];
$conv = (9*$c +160)/5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de temperatura</title>
</head>
<body>
  <form action="7A.php"method="GET">
    <span>Digite a temperatura em Celsius para conversão para Fahrenheit</span>
    <input type="number" id='celsiusT'name="Tcelsius">
    <input type="submit" value="Enviar">
      <br><br><br>
      <?php echo "Temperatura Convertida:{$conv}"; ?>
  </form>
  
</body>
</html>