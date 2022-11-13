<?php
class Customer
{
public function __construct($name){
$this->name = $name;
}
}
class VIP extends Customer{
public function getFormattedName(){
	return ucwords($this->name);
}
}
$alex = new VIP('alex ferguson');
echo $alex->getFormattedName();
?>