<?php
session_start();
$errors= array();
  //connect to the database
$db=mysqli_connect('localhost','root','','khosra');



// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $number = mysqli_real_escape_string($db, $_POST['num']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (empty($number)) {
  	array_push($errors, "Manager ID is required");
  }

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM employees WHERE name='$username' AND pass='$password' AND manager_ID='$number'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: employee.php');
  	}else { 	
  		array_push($errors, "Wrong username/password/Woking_under combination");
  
  	}
  }
    
   
  }


?>




</html>