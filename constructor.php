<?php 

class User {

  public $username;
  public $email;

  public function __construct($username, $email){
    //$this->username = 'sam';
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend(){
    //return "added a new friend";
    return "$this->username just added a new friend";
  }

}

$userOne = new User('Rich', 'rich@gmail.com');
$userTwo = new User('Sam', 'sam@gmail.com');

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend() . '<br>';

echo $userTwo->username . '<br>';
echo $userTwo->email . '<br>';
echo $userTwo->addFriend() . '<br>';
