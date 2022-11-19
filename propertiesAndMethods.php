<?php 

class User {

    //properties
  public $username = 'richard';
  public $email = 'rich@gmail.com';

    //methods
  public function addFriend(){
    
    //return "added a new friend";
    return "$this->username just added a new friend";
  }

}

$userOne = new User();
$userTwo = new User();

//Echo the username of $userOne

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';

//Echo the result of the method addFriend

echo $userOne->addFriend() . '<br>';

$userTwo->username = 'Sam';
$userTwo->email = 'sam@gmail.com';

echo $userTwo->username . '<br>';
echo $userTwo->email . '<br>';

//print_r(get_class_vars('User'));
print_r(get_class_methods('User'));