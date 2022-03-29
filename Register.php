<?php include('Server.php') ?>

<!DOCTYPE html>
<html>

<head>
  
  <title>Sign Up</title>
  <link rel="icon" type="image/icon" href="img/Icon (Transparent Background).png">
  <link rel="stylesheet" type="text/css" href="css/All Around Design.css">

</head>

<body>

  <link rel="stylesheet" href="css/All Around Design.css">

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
    
    <br>
    <div class="header">
      <h3>Register</h3>
    </div>
  
    <form method="post" action="Register.php">
    
    <?php include('Errors.php'); ?>

    <div class="container">

      <br><br>
      <label><span class="dots">..............</span>Full Name:</label>
      <input type="text" name="fullname" value="<?php echo $fullname; ?>" placeholder=" i.e. Dela Cruz, Juan A., Sr.">

      <br><br>
      <label><span class="dots">.....................</span>E-mail:</label>
      <input type="email" name="email" value="<?php echo $email; ?>" placeholder=" Enter An Active E-mail">

      <br><br>
      <label><span class="dots">...</span>Contact Number:</label>
      <input type="text" name="contact" value="<?php echo $contact; ?>" placeholder=" Enter An Active Contact Number">

      <br><br>
      <label><span class="dots">...............</span>Password:</label>
      <input type="password" name="password_1" placeholder=" At Least 4 Characters">

      <br><br>
      <label>Confirm Password:</label>
      <input type="password" name="password_2" placeholder=" Re-type Your Password">

      <br><br>
      <button type="submit" class="buttons" name="reg_user">Register</button>
      <button type="submit" class="buttons" href="register.php">Clear</button>
    </div>
    
    <br><br>
    <p>
      Are You Already A Member In This Club? <a href="Log In.php">Sign In Now</a>
    </p>

  <br><br>
  </form>
  
  </center>

</body>

</html>