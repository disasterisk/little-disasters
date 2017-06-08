<?php
$pid = 0;
class Person {

  public $ID;
  public $firstName;
  public $lastName;
  public $address;
  public $address2;
  public $city;
  public $zip;
  public $email;
  public $password;

  function __construct($first, $last, $a, $a2, $c, $z, $e, $p) {
    $ID = $pid;
    $firstName = $first;
    $lastName = $last;
    $address = $a;
    $address2 = $a2;
    $city = $c;
    $zip = $z;
    $email = $e;
    $password = $p;
  }

  public function getID(){
    return $this->ID;
  }

  public function setID($ID){
    $this->ID = $ID;
    return $this;
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function setFirstName($firstName){
    $this->firstName = $firstName;
    return $this;
  }

  public function getLastName(){
    return $this->lastName;
  }

  public function setLastName($lastName){
    $this->lastName = $lastName;
    return $this;
  }

  public function getAddress(){
    return $this->address;
  }

  public function setAddress($address){
    $this->address = $address;
    return $this;
  }

  public function getAddress2(){
    return $this->address2;
  }

  public function setAddress2($address2){
    $this->address2 = $address2;
    return $this;
  }

  public function getCity(){
    return $this->city;
  }

  public function setCity($city){
    $this->city = $city;
    return $this;
  }

  public function getZip(){
    return $this->zip;
  }

  public function setZip($zip){
    $this->zip = $zip;
    return $this;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
    return $this;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password = $password;
    return $this;
  }
}
