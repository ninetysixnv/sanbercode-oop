<?php

class Animal{

	public $name, $legs = 2, $cold_blooded = "false";

	function __construct($name){
		$this -> name = $name;
	}
	public function get_name(){
		return $this -> name;
	}


}

$sheep = new Animal("shaun");
echo $sheep -> get_name() . "<br>"; // "shaun"
echo $sheep -> legs . "<br>"; // 2
echo $sheep -> cold_blooded; // false

echo "<br><br>";


// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>