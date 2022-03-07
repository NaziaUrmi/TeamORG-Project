<!DOCTYPE html>
<html>
<?php
session_start();
$name="";
$email="";
$num="";
$num1="";
$errors= array();
  //connect to the database
$db=mysqli_connect('localhost','root','','khosra');

//if apply button is clicked
if (isset($_POST['apply'])){
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $num = mysqli_real_escape_string($db,$_POST['num']);
	$num1 = mysqli_real_escape_string($db,$_POST['num1']);
    
    //ensure that from feilds are filled properly
    if(empty($name)){
        array_push($errors,"Name is required");
    }
    
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    
    if(empty($num)){
        array_push($errors,"Phone number is required");
    }
	if(empty($num1)){
        array_push($errors,"NID is required");
    }
    
    //Insert database
    if(count($errors)==0){
        $sql="INSERT INTO applycants (applicant_ID,applicant_Name,email,phone_no)
              VALUES ('$num1','$name','$email','$num')";
        mysqli_query($db,$sql);
		
    }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $working_under = mysqli_real_escape_string($db, $_POST['working_under']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

if($working_under =="0"){ //to check if its manager or not
	
  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM employees WHERE name='$username' AND pass='$password' AND manager_ID='$working_under'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
	  $nam=$_SESSION['username'];
	  	$query1 = "SELECT * FROM employees WHERE name='$nam'";
	  $row=mysqli_fetch_array( mysqli_query($db, $query1));
	  print_r($row);
	  $id=$row['employee_ID'];
	  $_SESSION['employee_ID']=$id;
	 // print_r($_SESSION['employee_ID']);
  	  $_SESSION['success'] = "You are now logged in";
  	 header('location: index-MANAGER.html');
	// header('location: slider.php');
  	}else { 
		header('location: login.html');
  		array_push($errors, "Wrong username/password combination");
  
  	}
  }
}
	else{
		if (count($errors) == 0) {
  	//$password = md5($password);
  		$query = "SELECT * FROM employees WHERE name='$username' AND pass='$password' AND manager_ID=$working_under";
  		$results = mysqli_query($db, $query);
  		if (mysqli_num_rows($results) == 1) {
  	  		$_SESSION['username'] = $username;
	  		$nam=$_SESSION['username'];
	  		$query1 = "SELECT * FROM employees WHERE name='$nam'";
			$row=mysqli_fetch_array( mysqli_query($db, $query1));
	  		print_r($row);
	  		//$id=$row['employee_ID'];
			//$_SESSION['employee_ID']=$id;
			// print_r($_SESSION['employee_ID']);
  	  		$_SESSION['success'] = "You are now logged in";
  	  		header('location: INDEX_EMPLOOYEE.html');
  	}else { 
		header('location: login.html');
		
  		array_push($errors, "Wrong username/password combination");
  
  	}
  }
		
	}
    
   
  }


?>




</html>