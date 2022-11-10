<?php
if (!isset($_GET["valor"])) $_GET["valor"] = 0;
if (!isset($_GET["taxa"])) $_GET["taxa"] = 0;
if (!isset($_GET["tempo"])) $_GET["tempo"] = 0;


$valor = (double) $_GET["valor"];
$taxa = (double) $_GET["taxa"];
$tempo = (double) $_GET["tempo"];

$prestacao = $valor +(valor*$taxa/100)*$tempo;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo de prestações em atraso</title>
</head>
<body>
  <form action="7E.php"method="GET">
    <h1>Cálculo e a apresentação do valor de uma prestação em atraso</h1>
    <span>Valor (apenas numeros)</span>
    <input type="text" name="valor">
    <span>Taxa % de atraso (apenas numeros)</span>
    <input type="text" name="taxa">
    <span>Tempo de atraso (apenas numeros)</span>
    <input type="text" name="tempo">

    <input type="submit" value="Enviar">
      <br><br><br>
      <?php echo "Valor da pretação:{$prestacao} &nbsp; &nbsp; &nbsp"; ?>
  </form>
  
</body>
</html>