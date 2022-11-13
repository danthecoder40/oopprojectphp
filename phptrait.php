<?php
trait Logger{
public function log($msg){
echo '<pre>';
echo date('Y-m-s  h:i:s') . ':' . '(' . _CLASS_ . ')' . $msg . '<br/>';
echo '</pre>';
}
}
class BankAccount{
use Logger;
private $accountNumber;
public function __construct($accountNumber){
$this->accountNumber = $accountNumber;
$this->log ("A new $accountNumber bank account created");
}
}
class User{
	use Logger;
public function __construct(){
$this->log('A new user created');
}
}
trait Preprocessor{
public function preprocess()
}
?>