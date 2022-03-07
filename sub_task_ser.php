<?php
session_start();
$name="";
$num="";
$i="";
$errors= array();
  //connect to the database
$db=mysqli_connect('localhost','root','','khosra');
$task_id= $_SESSION['last_id'];
$query="SELECT * FROM works where task_id='$task_id'";
mysqli_query($db,$query);
$row=mysqli_fetch_array(mysqli_query($db,$query));
//print_r($row);
$tas_id=$row['task_id'];

//counting how mane entries are there
if(isset($_POST['submit']))
{
$num= count($_POST["name"]);
if($num >0)
{
	for($i=0; $i<$num; $i++)
	{
		if(trim($_POST["name"][$i] != ''))
		{
			$name=mysqli_real_escape_string($db,$_POST['name'][$i] );
			$sql="INSERT INTO sub_task (subtask,task_id) VALUES('$name','$tas_id')";
			 mysqli_query($db,$sql);
		}
	}
	echo "Data Inserted Successfully";
}
}

else
{
	//echo "Enter Sub Task";
}
	


?>