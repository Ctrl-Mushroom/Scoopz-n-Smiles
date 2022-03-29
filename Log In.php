<?php include('Server.php') ?>

<!DOCTYPE html>
<html>

<head>
  <title>Sign In</title>
  <link rel="icon" type="image/icon" href="img/Icon (Transparent Background).png">
  <link rel="stylesheet" type="text/css" href="css/All Around Design.css">

</head>

<body>

  <div>
    <ul>
      <a class="button" href="Homepage.php">Home</a><span class="dots">...</span>
    </ul>
  </div>

  <center>
    <div class="toggle">
      <img src="img/Icon (Transparent Background).png">
      <div class="tophead">
        <strong>Scoopz n' Smiles</strong>
      </div>
    </div>

    <br><br>
    <div class="header">
      <h3>Log In</h3>
    </div>
   
    <form method="post" action="Log In.php">
    
    <?php include('Errors.php'); ?>
    
    <br><br>
    <div class="container">

      <label>Full Name</label>
      <input type="text" name="fullname" placeholder=" i.e. Dela Cruz, Juan A., Sr.">

      <br><br>
      <label>Password</label>
      <input type="password" name="password" placeholder=" Enter Your Password Here">

      <br><br><br><br>
      <button type="submit" class="button" name="login_user">Log In</button>
      <button type="submit" class="button" href="Log In.php">Clear</button>
    </div>
    
    <p><br><br>
      Illegitimate Member? Don't In A Worry... <a href="Register.php">Sign Up Here</a>
    </p>

    </form>

  </center>
    

</body>

</html>