<?php 

class Carro
{
	private function metodoPrivado(int $velocidade, string $msgQualquer = 'Teste')
	{
		return "velocidade $velocidade $msgQualquer";

	}
}

$reflectionClass = new ReflectionClass(Carro::class);
$instancia = $reflectionClass->newInstance();

$metodoPrivado = $reflectionClass->getMethod('metodoPrivado');
$metodoPrivado->setAccessible(true);
$retornoMetodo = $metodoPrivado->invoke($instancia, 20, 'por Hora!');  

echo '<pre>';
var_dump($retornoMetodo);


/*Retorno
	string(23) "velocidade 20 por Hora!"
*/