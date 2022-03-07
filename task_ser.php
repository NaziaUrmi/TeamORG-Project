<?php
session_start();
$task="";
$des="";
$date="";
$prere="";
$dep="";
$asto="";
$errors= array();
  //connect to the database
$db=mysqli_connect('localhost','root','','khosra');
$asby= $_SESSION['username'];
$query="SELECT * FROM employees where name='$asby'";
mysqli_query($db,$query);
$row=mysqli_fetch_array(mysqli_query($db,$query));
//just to check if row is working or not
//print_r ($row);
$emp_id=$row["employee_ID"];

//if apply button is clicked
if (isset($_POST['submit'])){
    $task = mysqli_real_escape_string($db,$_POST['task']);
    $des = mysqli_real_escape_string($db,$_POST['des']);
    $date = mysqli_real_escape_string($db,$_POST['date']);
	
	//$prere = mysqli_real_escape_string($db,$_POST['preqarr']);
	//echo $prereq;
	echo "<script>console.log(".$_POST['preqarr'].");</script>";
	echo "<script>console.log(".$_POST['deparr'].");</script>";
	//$dep = mysqli_real_escape_string($db,$_POST['dep']);
	$asto = mysqli_real_escape_string($db,$_POST['num']);
    
    //ensure that from feilds are filled properly
    if(empty($task)){
        array_push($errors,"Task is required");
    }
    
    if(empty($des)){
        array_push($errors,"Description is required");
    }
    
    if(empty($date)){
        array_push($errors,"Date number is required");
    }
	/*if(empty($prere)){
        array_push($errors,"Dependent on is required");
    }
	if(empty($dep)){
        array_push($errors,"Dependent 2 is required");
    }*/
	if(empty($asto)){
        array_push($errors,"ID is required");
    }
    
    //Insert database
    if(count($errors)==0){
		
        $sql="INSERT INTO works (task,deadline, pre_requisite, dependency, Assigned_to,Assigned_by,description)
              VALUES ('$task','$date', '".$_POST['preqarr']."', '".$_POST['deparr']."', '$asto','$emp_id','$des')";
        mysqli_query($db,$sql);
		$last_id = $db->insert_id;
		echo "Last id $last_id";
		$_SESSION['last_id'] = $last_id;
		//just to check if session is working or not
		$num=$_SESSION['last_id'];
		echo "session use $num";
		header('location: sub_taskV2.php');
    }
}





?>