<?php
abstract class Dumper{

abstract public function dump($data);

}

class WebDumper extends Dumper{

public function dump($data){

echo '<pre>';

var_dump($data);

echo '</pre>';

}

}

class ConsoleDumper extends webDumper{

public function dump($data){

	var_dump($data);
}
}

class DumperFactory{
public static function getDumper(){
return PHP_SAPI === 'cli'

? new ConsoleDumper()
:new WebDumper();
}
}
$webDumper = new WebDumper();
$webDumper->dump ('PHP abstract class is awesome');
?>