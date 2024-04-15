<?php
abstract class Person{
    //properties of abs class
    protected $name;

    // method of absclass
    //abstract method
    abstract public function printname();
}

class Myperson extends Person{

    public function setName($newName){
        $this->name= $newName;
    }


    public function printname(){
        echo $this->name;
    }
}
$obj= new Myperson;

$obj->setName('Monu Singh');
$obj->printname();
?>