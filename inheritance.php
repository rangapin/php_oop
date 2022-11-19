<?php 

  class User {

    public $username;
    private $email;

    public function __construct($username, $email){
      //$this->username = 'sam';
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
    public function setEmail($username){
      if(strpos($username, '@') > -1){
        $this->email = $username;
      };
    }

  }

  class AdminUser extends User {

    public $level;

    public function __construct($username, $email, $level){
      parent::__construct($username, $email);
      $this->level = $level; 
    }

  }

  $userOne = new User('Rich', 'rich@gmail.com');
  $userTwo = new User('Sam', 'sam@gmail.com');
  $userThree = new AdminUser('yoshi', 'yoshi@gmail', 5);

  echo $userThree->level . '<br>';
  echo $userThree->username . '<br>';
  echo $userThree->getEmail() . '<br>';