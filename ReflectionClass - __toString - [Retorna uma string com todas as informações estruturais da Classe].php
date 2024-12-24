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


echo '<pre>';
echo $reflector->__toString();

/* Retorna
Class [  class Classe ] {
  @@ C:\Users\familiaconte\OneDrive\Devel\BackEnd\PHP\Testes\teste.php 3-22

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [  public $one ]
    Property [  public $two ]
  }

  - Methods [3] {
    Method [  public method __construct ] {
      @@ C:\Users\familiaconte\OneDrive\Devel\BackEnd\PHP\Testes\teste.php 8 - 11
    }

    Method [  public method echoOne ] {
      @@ C:\Users\familiaconte\OneDrive\Devel\BackEnd\PHP\Testes\teste.php 13 - 16
    }

    Method [  public method echoTwo ] {
      @@ C:\Users\familiaconte\OneDrive\Devel\BackEnd\PHP\Testes\teste.php 18 - 21
    }
  }
}
 */