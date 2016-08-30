<?php




class myClass  {

  private $test =11111;

  public function getTest(){

      return $this->test;
  }

}


$myclass = new MyClass();
echo $myclass->getTest();

$classeMyCLass = new ReflectionClass('myCLass');

var_dump($classeMyCLass->hasProperty('test'));
var_dump($classeMyCLass->hasProperty('test2'));