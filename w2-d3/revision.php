<?php

class Car {

public functiuon__construct()
	{
	$this->carMake = $make;
	$this->carModel = $model;
	}

public function setMake($par){
	$this->make = $par;
	}

	function getMake(){
	echo $this->make.<br/>";
	}

	function setModel($par){
	$this->model = $par;
	}

	function getModel(){
	echo $this->model."<br/>";
	}
 }


class NewCars extends Car{
	
	function willFly($par){
	
		$converter = 0;
	while($converter <= 15){
		$converter += 13;
	if($converter == 0)
	echo "this car can't fly";
	} 
	}
	echo "this car can fly \n";
	}
}

class UsedCar extends car









$camry = new Make;
$mustang = new Make;
$civic = new Make;

$camry->setMake("toyota");
$mustang->setMake("ford");
$civic->setMake("honda");


