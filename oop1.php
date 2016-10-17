<?php

class car{
    public $color; //property
    
    public function setColor($c){
        return "My Car is : ".$this->color=$c;
    }
    
    public function sayHello(){
        return "say Hello ";
    }
    
}

$mycar=new car;
echo $mycar->sayHello();
echo $mycar->setColor("Blue");
echo "<hr>";
echo $mycar->color="Red";
