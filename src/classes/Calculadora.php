<?php
namespace Src\classes;

class Calculadora
{
	public function somar($numeroUm, $numeroDois) 
	{
		return $numeroUm + $numeroDois;
	}

	public function subtrair($numeroUm, $numeroDois)
	{
		return $numeroUm - $numeroDois;
	}

	public function multiplicar($numeroUm, $numeroDois)
	{
		return $numeroUm * $numeroDois;
	}

	public function divisao($numeroUm, $numeroDois)
	{
		if ($numeroUm == 0 OR $numeroDois == 0) {
			return 0;
		}
		return $numeroUm / $numeroDois;
	}
}
