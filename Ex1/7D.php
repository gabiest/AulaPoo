<?php
if (!isset($_GET["tempo"])) $_GET["tempo"] = 0;
if (!isset($_GET["velocidade"])) $_GET["velocidade"] = 0;

$tempo = (double) $_GET["tempo"];
$velocidade = (double) $_GET["velocidade"];
$distancia = $tempo*$velocidade;
$LitrosU= $distancia/12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo de gasolina</title>
</head>
<body>
  <form action="7D.php"method="GET">
    <h1>Cálculo da quantidade de litros de combustível gasta em uma viagem, utilizando um automóvel que faz 12 Km por litro</h1>
    <span>Tempo</span>
    <input type="number" name="tempo">
    <span>Velocidade</span>
    <input type="number" name="velocidade">

    <input type="submit" value="Enviar">
      <br><br><br>
      <?php echo "Tempo gasto na viagem:{$tempo} &nbsp; &nbsp; &nbsp; Velocidade:{$velocidade} &nbsp; &nbsp; &nbsp; Distancia percorrida:{$distancia} &nbsp; &nbsp; &nbsp; Litros de gasolina utilizados:{$LitrosU} "; ?>
  </form>
  
</body>
</html>