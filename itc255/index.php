<?php
require_once 'lists.php';
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
          <a href="register.php">register</a>';
        }
        else {
          echo '<a>';
          echo $currentUser;
          echo '</a>';
          echo '<a>logout</a>';
        }
      echo '</div>
      <hr>
    </header>
  <main>
    <p>Community Assist assists the community.</p>';
    if($currentUser==0){
      echo '<p><a href="login.php">Log in</a> or <a href="register.php">register</a> to begin.</p>';
    }
    else {
      echo '<a href="requestGrant.php">Request Grant</a><br>
      <a href="donate.php">Donate</a><br>
      <a href="myDonations.php">View Donations</a><br>
      <a href="myGrants.php">View Grants</a>';
    }
  echo '</main>
</div>
</body>
</html>';
