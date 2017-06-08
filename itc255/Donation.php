<?php
class Donation {
  public donor String;
  public donationAmount double;
  public donationDate DateTime;
  public donationStatus int;
  public function __construct($donor,$amount)
  {
    $donorID = $donor;
    $donationAmount = $amount;
    $donationDate = date('m-d-Y, H:i:s');
    $donationStatus = 1;
  }
}
