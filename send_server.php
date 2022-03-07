
<!DOCTYPE html>

<html>


<?php
session_start();
$id="";
$msg="";
$errors= array();
$emp_id="";
  //connect to the database
 $db=mysqli_connect('localhost','root','','khosra');

 //to get the id
$user=$_SESSION['username'];
$query="SELECT * FROM employees where name='$user'";
mysqli_query($db,$query);
$row=mysqli_fetch_array(mysqli_query($db,$query));
//print_r($row);
$emp_id=$row["employee_ID"];

//if send button is clicked
if (isset($_POST['send'])){
    $id = mysqli_real_escape_string($db,$_POST['id']);
    $msg = mysqli_real_escape_string($db,$_POST['txt']);
    
    //ensure that from feilds are filled properly
    if(empty($id)){
        array_push($errors,"ID is required");
    }
    
    if(empty($msg)){
        array_push($errors,"Message is required");
    }
    
    
    //Insert database
    if(count($errors)==0){
        $sql="INSERT INTO communication (message,sender_ID,receiver_ID,dates,times)
              VALUES ('$msg','$emp_id','$id',CURDATE(),CURRENT_TIME)";
        mysqli_query($db,$sql);
		

    }
}

?>
</html>