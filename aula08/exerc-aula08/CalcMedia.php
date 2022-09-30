<?php

require_once("MediaGeo.php");
// require_once("MediaArit.php");


$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$aluno = $_POST['nome'];


$medGeomet = new MediaGeo($nota1,$nota2,$aluno);

$medGeomet->mostrar();


$medArit = new MediaArit ( $nota1, $nota2, $aluno );
$medArit->mostrar();



