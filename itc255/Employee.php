<?php
$eid = 0;
class Employee {
  public $ID;
  public $personID;
  public $hireDate;
  public $position;

  public function __construct($person, $position) {
    $ID = $eid;
    $personID = $person;
    $hireDate = date('m-d-Y, H:i:s');
    $this->position = $position;
  }

}
