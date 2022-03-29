<?php
session_start();

//variables
$fullname = "";
$email    = "";
$contact = "";
$errors = array(); 

//connect sa db
$db = mysqli_connect('localhost', 'root', '', 'scoopzuser');

//para sa magreregister
if (isset($_POST['reg_user'])) {
  //kukunin lahat ng valid input sa form
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //clarification lng to
  if (empty($fullname)) { array_push($errors, "* * * * * * * * * * * Full Name is Required * * * * * * * * * * *"); }
  if (empty($email)) { array_push($errors, "* * * * * * * * * * * Email is Required * * * * * * * * * * *"); }
  if (empty($contact)) { array_push($errors, "* * * * * * * * * * * Contact Number is Required * * * * * * * * * * *"); }
  if (empty($password_1)) { array_push($errors, "* * * * * * * * * * Password is Required * * * * * * * * * *"); }
  if ($password_1 != $password_2) { array_push($errors, "* * * * * * * * * * Passwords Did Not Match * * * * * * * * * *"); }

  //checking sa db
  $user_check_query = "SELECT * FROM users WHERE fullname='$fullname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { //pag meron
    if ($user['fullname'] === $fullname) {
      array_push($errors, "* * * * * Full Name Already Choosed, Try Another One... * * * * *");
    }

    if ($user['email'] === $email) {
      array_push($errors, "* * * * * E-mail Is Already Existing, Try A New One!!! * * * * *");
    }
  }

  //malinis ang records
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (fullname, email, contact, password) 
  			  VALUES('$fullname', '$email', '$contact', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['fullname'] = $fullname;
  	//division
    //$_SESSION['success'] = "You are now logged in";
  	header('location: Index.php');
  }
}

//para sa magla-log in
if (isset($_POST['login_user'])) {
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($fullname)) {
    array_push($errors, "* * * * * * * * * * * * * * * Full Name is Required * * * * * * * * * * * * * * *");
  }
  if (empty($password)) {
    array_push($errors, "* * * * * * * * * * * * * * * Password is Required * * * * * * * * * * * * * * *");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE fullname='$fullname' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['fullname'] = $fullname;
      //Shit division
      //$_SESSION['success'] = "You Can Start Chewing Now!!!";
      header('location: Index.php');
    }else {
      array_push($errors, "* * * * Sorry!!! Full Name Is Incorrect or Check Your Password * * * *");
    }
  }
}

?>