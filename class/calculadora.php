<?php
class Calculadora{
	public function soma($a,$b) {
		return $a+$b;
	}

	public function subtrai($a,$b){
		return $a-$b;
	}

	public function divisao($a,$b){
		if ($b==0){
			return 0;
		} else {
			return $a/$b;
		}
	}

	public function multiplicacao($a,$b){
		return $a*$b;
	}

}
