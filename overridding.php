<?php
class Robot{
public function greet(){
return 'hello';
}
}
class Android extends Robot
{
}
$android = new Android();
echo $android->greet();
?>