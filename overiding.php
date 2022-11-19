
<?php 

class User {

  public $username;
  private $email;
  public $role = 'member';

  public function __construct($username, $email){
    //$this->username = 'sam';
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend(){
    //return "added a new friend";
    return "$this->username just added a new friend";
  }

  public function message(){
    return "$this->email sent a new message";
  }

  // getters
  public function getEmail(){
    return $this->email;
  }

  // setters
  public function setEmail($username){
    if(strpos($username, '@') > -1){
      $this->email = $username;
    };
  }

}

class AdminUser extends User {

  public $level;
  public $role = 'admin';

  public function __construct($username, $email, $level){
    parent::__construct($username, $email);
    $this->level = $level; 
  }

  public function message(){
    return "an admin sent a new message";
  }


/**
 * Get the value of userOne
 */ 
public function getUserOne()
{
return $this->userOne;
}
}

$userOne = new User('Rich', 'rich@gmail.com');
$userTwo = new User('Sam', 'sam@gmail.com');
$userThree = new AdminUser('yoshi', 'yoshi@gmail', 5);

echo $userOne->role . '<br>';
echo $userThree->role . '<br>';

echo $userOne->message() . '<br>';
echo $userThree->message() . '<br>'; 
