<?php

require_once('Imedia.php');
require_once('ImediaA.php');




class MediaA  implements ImediaA {
    private $aluno;
    private $nota1;
    private $nota2;



    public function CalculaMediaA()
{
    return ( ($this->nota1 + $this->nota2) /2);
}





    public function setDados($nota,$nota2,$aluno){

        $this->aluno = $aluno;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }


   

}





?>