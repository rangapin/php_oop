<?php 

//getters and setters and both class method

//getter = get and return a private property

//setter = set a private property

class User {

  public $username;
  private $email;

  public function __construct($username, $email){
    //$this->username = 'ken';
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend(){
    //return "added a new friend";
    return "$this->username just added a new friend";
  }

  // getters
  public function getEmail(){
    return $this->email;
  }

  // setters
  public function setEmail($email){
    if(strpos($email, '@') > -1){
      $this->email = $email;
    };
  }

}

$userOne = new User('mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

echo $userOne->getEmail() . '<br>';
echo $userTwo->getEmail() . '<br>';

$userTwo->setEmail('yoshi@thenetninja.co.uk');

echo $userTwo->getEmail() . '<br>';