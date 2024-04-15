<?php
//create the class
/*
class Person
{
    public $name;
    public $age;
    public $gender;

    //create a method
    public function setName($name,$age,$gender)
    {
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
    }
    public function getName()
    {
        echo "Name of person is :" .$this->name;
    }
    // public function setAge($age)
    // {
    //     $this->age=$age;
    // }
    public function getAge()
    {
        echo "Age of person is :". $this->age;
    }
    // public function setgender($gender)
    // {
    //     $this->gender=$gender;
    // }
    public function getGender()
    {
        echo "Gender of person is :". $this->gender;
    }
}
$firstobj = new person();
$firstobj->setName("mohan",55,"Male");
$firstobj->getName();
echo"<br>";
// $firstobj->setAge(25);
$firstobj->getAge();
echo"<br>";
// $firstobj->setgender('Male');
$firstobj->getGender();
echo"<br>";
// $secondobj= new Person();
// $secondobj->setName("Sumit Singh");
// $secondobj->getName();

class Mobile{
    //properties of class
    public $price;
    public $ModelName;
    public $ram;

    //method of class
    public function setPrice($price)
    {
        $this->price=$price;
    }
    public function getPrice()
    {
        print "price of Mobile is :".$this->price;
    }
    public function setModel($ModelName)
    {
        $this->ModelName=$ModelName;
    }
    public function getModel()
    {
        print "Model of Mobile is :".$this->ModelName;
    }
}
$Motog= new Mobile();
$Motog->setPrice(25000);

$Motog->getPrice();
echo "<br>";
$Samsung= new Mobile();
$Samsung->setPrice(45000);
$Samsung->getPrice();
echo "<br>";
$OPPO= new Mobile();
$OPPO->setPrice(20000);
$OPPO->getPrice();
echo "<br>";
$OPPO= new Mobile();
$OPPO->setModel('OPPO');
$OPPO->getModel();
*/
class Laptop{

    //properties of class
    public $name;
    public $price;

    //method of class
    public function setName($name,$price)
    {
        $this->name=$name;
        $this->price=$price;
    }
    public function getName()
    {
        echo $this->name;
    }
    public function getPrice()
    {
        echo $this->price;
    }
}
$flaptop= new Laptop();  //
$flaptop->setName("Dell",75000);
$flaptop->getName();
$flaptop->getPrice();
?>