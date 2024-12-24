<?php 

class Classe
{
    public $one = '';
    public $two = '';
   
    public function __construct()
    {

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

$properties = $reflector->getProperties();    //Retorna as propriedades da Classe ou passar como parametro o nome da propriedade
var_dump(Reflection::getModifierNames($properties->getModifiers())); //Assim retorna os nomes das propriedades, acima apenas o código
//Existem itens pra validar direto isPublic, isPrivate por exemplo que facilita tmb na Reflection

echo '<pre>';
print_r($properties);

/* Retorno
Array
(
    [0] => ReflectionProperty Object
        (
            [name] => one
            [class] => Classe
        )

    [1] => ReflectionProperty Object
        (
            [name] => two
            [class] => Classe
        )

)
*/
