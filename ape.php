<?php

require_once ("animal.php");


class ape extends Animal{
	public $sungokong = "Auooo";

	public function __construct($sungokong){
		$this->sungokong = $sungokong;
	}

	// public function set_jump($sungokong){
	// 	$this->sungokong = $sungokong;
	// }


	public function yell(){
		return $this-> sungokong;
	}


}

$sungokong = new ape("Kera Sakti");
echo $sungokong-> get_name() . "<br>";
echo $sungokong->yell();

echo "<br><br>";


?>