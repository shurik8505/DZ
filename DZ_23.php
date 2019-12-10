<?php

/**
 * 
 */
class Transport 
{
	public $color, $brand, $speed;

	function info()
	{
		return "color: " . $this->color .PHP_EOL. "brand: " . $this->brand .PHP_EOL. "speed: " . $this->speed . PHP_EOL; 
	}
}
 /**
  * 
  */
 class Electrobike extends Transport
 {
 	public $electro;
 	function info()
 	{
 		return parent::info() . "vid energii: " . $this->electro . PHP_EOL;
 	}
 }

 // /**
 //  *  
 //  */
 class Bike extends Electrobike
 {
 	public $type;
 	function setgroup() {
 		return $this->color = $color;
 	}
 	function info()
 	{
 		return parent::info() . "type: " . $this->type . PHP_EOL;
 	}
 }

//  $t = new Transport();
//  $t->color = "black";
//  $t->brand = "bmw";
//  $t->speed = "60";

// $b = new Electrobike();
// $b->electro = "DC";
// $b->color = "black";
//  $b->brand = "Aist";
//  $b->speed = "15";
//  echo $b->info();


// $b2 = new Electrobike();
// $b2->electro = "AC";
// $b2->color = "green";
//  $b2->brand = "Ukraine";
//  $b2->speed = "20";
//  echo $b2->info();

 $b3 = new Bike();
$b3->electro = "AC/DC";
$b3->color = "yellow";
 $b3->brand = "Desna";
 $b3->speed = "20";
 $b3->type = "desertbike";
 echo $b3->info();