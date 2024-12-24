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

$a = new Classe();

$reflector = new ReflectionClass('Classe');

$properties = $reflector->getEndLine();

echo '<pre>';
print_r($properties);

/* Retorna ==> 22 */