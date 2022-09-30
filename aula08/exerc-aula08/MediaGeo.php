<?php
require_once("Media.php");

class MediaGeo extends Media 
{

   
function __construct ( $nota1, $nota2, $aluno )
{
    parent::__construct ( $nota1, $nota2, $aluno);
}



public function MediaGeometrica()
{

    return sqrt($this->nota1 * $this->nota2); 
}



}