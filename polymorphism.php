<?php
abstract class Person{
abstract public  function greet();
}
class English extends Person{
public function greet(){
 return 'hello';
}
}
class German extends Person{
public function greet(){
 return 'hallo';
}
}
class French extends Person{
public function greet(){
 return 'Bonjour';
}
}
function greeting($people){
   foreach($people as $person){
   	echo $person->greet() . '<br>';
   }
}

class American extends Person{
public function greet(){
return 'hi';
}
}

$people = [
new English(),
new German(),
new French(),
new American
];
greeting($people);
?>