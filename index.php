<?php

// Include the class
require ('pet.php');
require ('dog.php');

// Instantiate a pet object
$pet1 = new Pet('Clifford', 'Red');
$pet2 = new Pet('Bob');
$pet3 = new Pet();

$dog = new Dog ('Douglas');
$dog->eat();
$dog->fetch();

$pet3->setName('Filbert');
echo "Pet's name is " . $pet3->getName();


$pet2->setColor('Cyan');
echo "Pet's color is " . $pet2->getColor();

echo "<pre>";
var_dump($pet1);
var_dump($pet2);
var_dump($pet3);
echo "</pre>";

// Invoke the eat method
$pet1->eat();

$pet1->talk();

$pet1->sleep();