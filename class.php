<?php 

// A class is a blueprint for an object it describe its properties and methods

// A property is is what describes an object IE the lenght, the speed and the color of a train

// A method is what this object can do, IE break or speed up (a function associated to the object)

class User 
{
}

//Instantiate the class and assign it to a variable $userOne

$userOne = new User();
$userTwo = new User();

//Echo the class of $userOne

echo 'the class is: ' . get_class($userOne);

