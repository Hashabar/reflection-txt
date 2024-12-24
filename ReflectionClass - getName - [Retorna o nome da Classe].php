<?php 

class Classe
{
    public $one = '';
    public $two = '';
   
    public function __construct()
    {
    	$this->one = 'ppp';
    }
   
    public function echoOne()
    {
        echo $this->one."\n";
    }

    public function echoTwo()
    {
        echo $this->two."\n";
    }
}

$a = new Classe();                          //Não precisaria de usar o ::class

$reflector = new ReflectionClass('Classe'); //Reflexão da Classe, pode passar string ou Classe::class

$properties = $reflector->getName();

echo '<pre>';
print_r($properties);

/* Retorna ==> Classe */