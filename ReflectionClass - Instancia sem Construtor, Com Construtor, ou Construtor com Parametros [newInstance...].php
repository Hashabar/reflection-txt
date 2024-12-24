<?php

namespace Alura\Reflection;

class ClasseExemplo
{
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private string $propriedadePrivada = 'privada';

    public function __construct(string $nome)
    {
        echo 'Executando construtor de ' . __CLASS__;
    }
}

require_once __DIR__ . '/vendor/autoload.php';

use Alura\Reflection\ClasseExemplo;

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

$objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();   //Sem Construtor
#$objetoClasseExemplo = $reflectionClass->newInstance(); 					//Modo com construtor sem parametros
#$objetoClasseExemplo = $reflectionClass->newInstanceArgs(); 				//Opção de passar Parametros

echo '<pre>';
var_dump($objetoClasseExemplo);