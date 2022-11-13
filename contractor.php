<?php
class BankAccount{
function __construct(){
public $accountNumber;
public $balance;
public function  __construct($accountNumber , $balance){
$this->accountNumber =$accountNumber;
$this->balance = $balance;
}
}
$account = new BankAccount(1,100);
echo $account->balance;
}
?>