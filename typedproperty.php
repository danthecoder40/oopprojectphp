<?php
class BankAccount{
public float $balance =0;
public function __construct(float $balance){
$this-> balance = $balance; 
}
}
$account = new BankAccount(200);
var_dump($account->balance);
?>