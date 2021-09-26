<?php

// accessing class varialbes from child class
class DemoClass {
	private $name="<br/>Class Example Demo<br/>";
	public function display(){
		echo $this->name;
	}
}
$obj = new DemoClass;
$obj->display();


class NewDemoClass extends DemoClass
{
	
}
$newObj= new NewDemoClass();
$newObj->display();