<?php 

class Carro
{
	private function metodoPrivado(int $velocidade, string $msgQualquer = 'Teste')
	{
		return "velocidade $velocidade $msgQualquer";

	}
}

$reflectionClass = new ReflectionClass(Carro::class);

try {
	$instancia = $reflectionClass->newInstance();
	$metodoPrivado = $reflectionClass->getMethod('metodoPrivadoTeste');
} catch (ReflectionException $e) {
	echo $e->getMessage();
}


/*Retorno
	Method Carro::metodoPrivadoTeste() does not exist
*/