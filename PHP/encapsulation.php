<?php
class MyName
{
    private $name="KIET";
    private $age=10;
    function getName()
    {
        return $this->name;
    }
    function getAge()
    {
        return $this->age;
    }
    function setAge($age)
    {
        $this->age=$age;
    }
}
$my1=new MyName();
echo "<br>Name=".$my1->getName(); //KIET
echo "<br>Age=".$my1->getAge();  //10
$my1->setAge(50);
echo "<br>Name=".$my1->getName(); //KIET
echo "<br>Age=".$my1->getAge();   //50
?>