<?php
namespace Src\classes;

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{
	private $calculadora;

	public function setUp()
	{
		$this->calculadora = new Calculadora();
	}
  
	public function testSoma()
	{		
		$this->assertEquals(3, $this->calculadora->somar(1, 2));
	}

	public function testSubtrai()
	{
		$this->assertEquals(3, $this->calculadora->subtrair(5, 2));
	}

	public function testMultiplicacao()
	{
		$this->assertEquals(12, $this->calculadora->multiplicar(6, 2));
	}

	public function testDivisao()
	{
		$this->assertEquals(4, $this->calculadora->divisao(16, 4));
	}

	public function testDivideZero()
	{		
		$this->assertEquals(0, $this->calculadora->divisao(0, 0));
	}
}
