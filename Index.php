<?php 
  session_start();

  if (!isset($_SESSION['fullname'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: Log In.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['fullname']);
    header("location: Log In.php");
  }

?>

<!DOCTYPE html>

<html>
<head>

  <title>Home</title>
  <link rel="icon" type="image/icon" href="img/Icon (Transparent Background).png">
  <link rel="stylesheet" type="text/css" href="css/All Around Design.css">

</head>
<body>

  <center>
    
    <div>
      <img src="img/Icon (Transparent Background).png" class="topheadicon">
      <div class="tophead">
        <strong>Scoopz n' Smiles</strong>
      </div>
    </div>

    <div class="header">

      <br>
      <h3 class="wordindex">Get The Real Scoop...</h3>
    </div>

    <div class="content">

    <!-- Shit division -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- tawagin ko pangalan mo -->
    <?php  if (isset($_SESSION['fullname'])) : ?>
      <p><h3>Hello <strong><?php echo $_SESSION['fullname']; ?>... Please <a href="Agreement.php"><button class="button">Click Here!!!</button></a></h3></strong></p>
      <br><p><a href="Index.php?logout='1'" style="" class="logout">Log Out</a> </p>
    <?php endif ?>

    <a href="Founders.php"><button class="incognito">Founders</button></a>

    </div>

  </center>

</body>

</html>