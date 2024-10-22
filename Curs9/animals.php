<?php

require_once "Dog.php";
require_once "Cat.php";

$dog = new Dog( 'Thor', 12, 4, 10);

$dog->setLegs(legs:6);

$dog ->setHeight(height:28);

var_dump($dog->getHeight());

echo '<br>';
echo $dog;

$cat = new Cat( 'Tom', 4, 4, height:20);

$cat->legs= 2;

var_dump($cat);