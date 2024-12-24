<?php 

class Carro
{
	public function __construct()
	{
		echo 'Carro criado';
	}

	public function abastecer()
	{
		return 'carro abastecido';
	}
}

class Moto
{
	private function trocarOleo()
	{
		return true;
	}

	public function enxerPneu()
	{
		echo 'Pneu cheio';
	}
}

$classe = 'Moto';
$reflection = new \ReflectionClass($classe);

//\ReflectionMethod::IS_STATIC   , IS_PUBLIC, IS_PRIVATE entre outros para Filtrar
$metodos = (array) $reflection->getMethods(\ReflectionMethod::IS_PRIVATE);    //Se não passar o parametro, lista tudo
$metodos = (array) $reflection->getMethods(\ReflectionMethod::IS_PRIVATE | \ReflectionMethod::IS_PROTECTED); //Filtrando 2 ou mais
#Operador | está somando os bits, bitwise

echo '<pre>';
print_r($metodos);


/* Retorna
Array
(
    [0] => ReflectionMethod Object
        (
            [name] => trocarOleo
            [class] => Moto
        )

)
*/


