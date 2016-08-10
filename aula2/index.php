<?php

class Math{
	private $num_1;
	private $num_2;

	public function __construct($num_1,$num_2){
		$this->num_1 = $num_1;
		$this->num_2 = $num_2;		
	}
	public function sumAttributes(){
		return $this->num_1 + $this->num_2;

	}
	public function sum($num_1, $num_2){
		if($num_1 < 0 || $num_2 < 0)
			return "Can not sum numbers!";
		return $num_1 + $num_2;
	}
	public function sumAll($numbersArray){
		$sum=0;
		foreach($numbersArray as $number){
			$sum = $sum + $number;
		}
	}
}

$math = new Math(5,7);
echo $math->sumAttributes();
echo "</br>";
echo $math->sum(-7,3);
$array = array(1,2,3,4,5,6,7,8,9,10);
echo $math->sumAll($array);
