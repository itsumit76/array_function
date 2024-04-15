<?php

/*
trait greet{
    public function seyHello(){
        echo "Hello, Good Morning!";
    } 
}

trait greet2{
    public function ask(){
        echo "How are You ?";
    }
   
}
class Greeting{
    use greet;
    use greet2;
}
$obj= new Greeting();
$obj->sayHello();
$obj->ask();
*/
class base{
    public function code(){
        echo "Hello PHP\n";
    }
}
trait php{
    public function loop(){
        echo "we cat itrate anythin\n";
    }
}
class note extends base{
    use php;
    public function method(){
        echo "Method is same as function in procedural\n";
    }
}

$obj= new note();
$obj->code();
$obj->loop();
$obj->method();

?>