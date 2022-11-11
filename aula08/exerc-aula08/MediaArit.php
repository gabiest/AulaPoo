<?php

require_once('Imedia.php');

class MediaArit extends Media 
{

function __construct ( $nota1, $nota2, $aluno )
{
    parent::__construct ($n1, $n2, $aluno);
}

public function MediaAritmetica()
{
    return ( ($this->nota1 + $this->nota2) /2);
}


}