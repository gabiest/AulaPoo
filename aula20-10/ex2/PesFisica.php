<?php

require_once('Pessoa.php');
require_once('Ivendas.php');



class PesFisica extends Pessoa implements Ivendas
{
    public $nome;
    
    function listarPessoas():void{
    

    }

};
