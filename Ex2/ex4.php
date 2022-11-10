<?php

if( isset($_GET['perimetro']) ){
  $perimetro = $_GET['perimetro'];

  $diametro = getDiametro($perimetro);
  $r    = getRaio($diametro);
  $area     = getArea($r);
}


function getDiametro($p){
  return $p / 3.14;
}

function getRaio($d){
  return $d / 2;
}

function getArea($r){
  return $r * $r * 3.14;
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="ex4.php"method="GET" >
      <label>Digite o Perimetro:</label>
      <input type="number" name="perimetro">

      <input type="submit" value="Calcular">

      <?php echo "Diametro:{$diametro} &nbsp; &nbsp; &nbsp; Raio:{$r} &nbsp; &nbsp; &nbsp; Area:{$area} "; 
      ?>
    </form>



   
  </body>
</html>