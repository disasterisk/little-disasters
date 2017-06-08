<?php
class Member {
  public $username;
  public $personID;
  public $joinDate;

  function __construct($user, $person) {
    $username = $user;
    $personID = $person;
    $joinDate = date('m-d-Y, H:i:s');
  }

  public function getPersonID(){
    return $this->personID;
  }

  public function setPersonID($personID){
    $this->personID = $personID;
  }

  public function getUsername(){
    return $this->username;
  }

  public function setUsername($username){
    $this->username = $username;
    return $this;
  }
}
