<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fyyp2');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname,lastname, username, password, type) 
  			  VALUES('$fname', '$lname', '$username', '$password', '1')";
  	mysqli_query($db, $query);
  	header('location: login.php');
}