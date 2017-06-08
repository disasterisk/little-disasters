<?php
require_once 'lists.php';
if(isset($_POST['uName'])){
  $errorList = array();
  $pid++;
  $newPerson = new Person($_POST['fName'], $_POST['lName'], $_POST['address'], $_POST['address2'], $_POST['city'], $_POST['zip'], $_POST['email'], $_POST['pass']);
  $newMember = new Member($_POST['uName'], $pid);
  if (!in_array($newPerson)){
    try {
      $personList[] = $newPerson;
      $memberList[] = $newMember;
      header('index.php');
    } catch (Exception $addFailed) {
      $lastPerson = $personList[count($personList)-1];
      $lastMember = $memberList[count($memberList)-1];
      if ($lastMember != $newMember){
        if ($lastPerson == $newPerson){
          array_pop($personList);
        }
      }
      $pid--;
      $errorList[] = 'Error creating account. Please try again.';
    }
  } else {
    $pid--;
    $errorList[] = 'Record already exists.';
  }
}
echo '<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Community Assist</title>
    <link rel="stylesheet" href="style.css">
    <!--Remy Sharp Shim -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="title"><h1>Community Assist</h1></div>
        <div class="loginText">';
        if ($currentUser == 0){
          echo '<a href="login.php">login</a>
          <a>register</a>';
        }
        else {
          echo '<a>'.$currentUser.'</a>'.'<a>logout</a>';
        }
        echo '</div>
        <hr>
      </header>
      <main>';
        if (!empty($errorList)) {
          echo '<div class="errors">';
          foreach ($errorList as $error) {
            echo '<p>'.$error.'</p><br>';
          }
          echo '</div>';
        }
        echo '<form action="'.
        htmlspecialchars($_SERVER["PHP_SELF"]).
        '" method="post">
          <span class="formLabel"><p>Username:</p> </span>
          <span class="formInput">
            <input type="text" name="uName" value="">
          </span>
          <span class="formLabel"><p>First Name: </p></span>
          <span class="formInput">
            <input type="text" name="fName" value="">
          </span>
          <span class="formLabel"><p>Last Name: </p></span>
          <span class="formInput">
            <input type="text" name="lName" value="">
          </span>
          <span class="formLabel"><p>Address: </p></span>
          <span class="formInput">
            <input type="text" name="address" value="">
          </span>
          <span class="formLabel"><p>Apt/Suite: </p></span>
          <span class="formInput">
            <input type="text" name="address2" value="">
          </span>
          <span class="formLabel"><p>City: </p></span>
          <span class="formInput">
            <input type="text" name="city" value="">
          </span>
          <span class="formLabel"><p>Zip: </p></span>
          <span class="formInput">
            <input type="text" name="zip" value="">
          </span>
          <span class="formLabel"><p>Email: </p></span>
          <span class="formInput">
            <input type="email" name="email" value="">
          </span>
          <span class="formLabel"><p>Password: </p></span>
          <span class="formInput">
            <input type="password" name="pass" value="">
          </span>
          <span class="formLabel"><p>Retype Password: </p></span>
          <span class="formInput">
            <input type="password" name="pass2" value="">
          </span>
          <div class="submitButton"><input type="submit" value="Register"></div>
        </form>
      </main>
    </div>
  </body>
</html>';
