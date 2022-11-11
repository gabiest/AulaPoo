<?php

require_once('Imedia.php');
require_once('ImediaG.php');



class MediaG implements ImediaG {

    private $aluno;
    private $nota1;
    private $nota2;
 
    



    public function CalculaMediaG()
{

    return sqrt($this->nota1 * $this->nota2);

}


public function setDados($nota,$nota2,$aluno){

    $this->aluno = $aluno;
    $this->nota1 = $nota1;
    $this->nota2 = $nota2;
      
}

}


?>