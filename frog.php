<?php

require_once ("animal.php");

class Frog extends Animal{
	public $kodok = "hop hop";

	public function __construct($kodok){
		$this->kodok = $kodok;
	}

	public function jump(){
		return $this -> kodok;
	}


}

$kodok = new Frog("buduk");
echo $kodok->get_name() . "<br>";
$kodok -> legs = 4;
echo $kodok -> legs . "<br>";
echo $kodok -> jump();

echo "<br><br>";




?>