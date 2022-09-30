<?php

abstract class Media

{
  private $av1 ;
  private $av2 ;
  private $aluno;

abstract public function MediaAritmetica();
abstract public function MediaGeometrica();
    
function  __construct ($nota1, $nota2, $aluno)
{
   $this->av1   = $nota1;
   $this->av2   = $nota2;
   $this->aluno = $aluno; 
}



public function mostrar ()
{
    echo $this->aluno . "<br>";
    echo $this->av1 . "<br>";
    echo $this->av2 . "<br>";
}



}