<?php
interface Greeting{
public function greet();
}
class English implements Greeting{
public function greet(){
	return 'Hello';
}
}
class German implements Greeting{
public function greet(){

	return 'hallo';
}
}
class French implements Greeting{
    public function greet(){
    	return 'Bonjour!';
    }
}
function greeting($greeters){
foreach ($greeters as $greeter){
echo $greeter->greet() . '<br>';
}
}

$greeters = [
new English(),
new German(),
new French(),
];
greeting($greeters);
?>