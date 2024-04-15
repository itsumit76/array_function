<?php
class Animal {
    public function makeSound(){
        echo "The animal make a sound.\n";
    }
}
class Dog extends Animal{
    public function makeSound(){
        echo "The dog barks.\n";
    }
}
class Cat extends Animal{
    public function makeSound(){
        echo "The cat meows.\n";
    }
}

//Interface
interface CanFly{
    public function fly();
}
class Bird extends Animal implements CanFly{
    public function makeSound(){
        echo "The bird chirps.\n";
    }
    public function fly(){
        echo "The bird is flying.\n";
    }
}

$animal = new Animal();
$animal->makeSound();

$dog = new Dog();
$dog->makeSound();

$cat = new Cat();
$cat->makeSound();

$bird = new Bird();
$bird->makeSound();
$bird->fly();
?>