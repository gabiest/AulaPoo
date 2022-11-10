<?php

require ('imc.class.php');

error_reporting(1);

if(isset($_POST['btncalc'])){
  $peso   = $_POST['peso'];
  $altura = $_POST['altura'];

  $calcIMC = new IMC();
  $imc     = $calcIMC->getIMC($peso, $altura);
  $status  = $calcIMC->getStatus($imc);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMC</title>
</head>
<body>
  <center>
    <h2> Cálculo IMC </h2>
    <form action='Calculaimc.php' method='post' name="form3">
      <input type='hidden' name=oper><br>
      <div>
          <span>Peso: </span><br>
          <input type='number' name='peso' value="<?= $peso ?? ''?>" ><br>
      </div>
      <div>
          <span>Altura: </span><br>
          <input type='number' name='altura' value="<?= $altura ?? ''?>"><br>
      </div>
      <div>
          <input type="submit" name="btncalc" value="Calcular">
          <input type="button" value="Limpar" onclick="form3.oper.value='limpar'; submit();">
      </div>
    </form>

    <img src="<?=$status[1] ?>" width="80">
    <div>
        <span>Status da Situação: <?= $status[0] ?? '--'?></span><br>
        <span>IMC: <?= $imc ?? '--'?></span>
    </div>
    </center>
</body>
</html>