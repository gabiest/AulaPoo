

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=fo, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form.css" media="screen" />
</head>
<body>

    <h2>Média do aluno</h2>
    <form action="form.php" method="post" name="fmr" enctype="multipart/form-data" >

        <div class="form">
        <label for="nome">Coloque seu nome: </label>
        <input type="text"name="aluno" id="nome"  value = "<?= $aluno ?? ''?>"required>
    </div>
    </div>

    <div class="form">
        <label for="nota1">Primeira nota: </label>
        <input type="text" name="nota1" id="nota1" value = "<?= $nota1 ?? ''?>" required>
    </div>

    <div class="form">
        <label for="nota2">Segunda nota: </label>
        <input type="text" name="nota2" id="nota2" value = "<?= $nota2?? ''?>" required>
    </div>

    <div class="form">
        <input type="submit" value="Calcular Média!" name="btncalc">
      </div>

    </form>
</body>
</html>
<?php

require_once ('MediaA.php');
require_once ('MediaG.php');



if(isset($_POST['btncalc'])){
  $aluno = $_POST['aluno'];
  $nota1   = $_POST['nota1'];
  $nota2 = $_POST['nota2'];

  $CalcMedG = new MediaG;
  $mg->setDados($aluno,$nota1, $nota2);
  $mediaG->CalculaMediaG();

  echo "A media G é: {$mediaG}";



    $CalcMedA = new MediaA;
    $maa    = $CalcMedA->setDados($aluno,$nota1, $nota2);
    $mediaA  = $CalcMedA->CalculaMediaA();
    echo "A media A é: {$mediaA}";


}


?>