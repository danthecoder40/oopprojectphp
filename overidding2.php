<?php
class Robot{
public function greet(){
return 'hello';
}
}
class Android extends Robot{
public function greet(){
return ' </br> good work';
}
}
$android = new Robot();
echo $android->greet();
$android = new Android();
echo $android->greet();
?>