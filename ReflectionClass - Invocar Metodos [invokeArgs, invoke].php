<?php 

class Carro
{
	public function correr(int $velocidade, string $msgQualquer)
	{
		return "velocidade $velocidade $msgQualquer";

	}
}

$reflection = new ReflectionClass(Carro::class);
$instancia = $reflection->newInstanceWithoutConstructor();


$metodoCorrer = $reflection->getMethod('correr');
$retornoMetodoCorrer1 = $metodoCorrer->invoke($instancia, 20, 'por Hora!');                //Aqui passa por virula
$retornoMetodoCorrer2 = $metodoCorrer->invokeArgs($instancia, [50, 'por Hora que isso!']); //Aqui passa por array

echo '<pre>';
var_dump($retornoMetodoCorrer1);

var_dump($retornoMetodoCorrer2);

/*Retorno
	string(10) "Acelerando"
	string(13) "velocidade 50"
*/