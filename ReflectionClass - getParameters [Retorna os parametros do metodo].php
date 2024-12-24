<?php 

class Carro
{
	public function correr(int $velocidade, string $msgQualquer = 'Teste')
	{
		return "velocidade $velocidade $msgQualquer";

	}
}

$reflectionClass = new ReflectionClass(Carro::class);

$reflectionMethod = $reflectionClass->getMethod('correr');

$parameters = array_filter(
	$reflectionMethod->getParameters(),
	fn (ReflectionParameter $parameter) => !$parameter->isOptional()
);

echo '<pre>';
foreach($parameters as $parameter) {
	$tipo = (string) $parameter->getType();
	var_dump($tipo, $parameter->getType());
}


/*Retorno
	string(3) "int"
		object(ReflectionNamedType)#5 (0) {
	}
*/