
<html>
<head>
	<title>Split</title>
</head>
<body>

<?php
	session_start();
	$db=mysqli_connect('localhost','root','','khosra');
	$user=$_SESSION['username'];
	$query1="SELECT * FROM employees WHERE name='$user'";
	$row=mysqli_fetch_array(mysqli_query($db,$query1));
	print_r($row);
	$emp_id=$row["employee_ID"];
	$query2="SELECT * FROM works WHERE Assigned_to='$emp_id'";
	$row2= mysqli_fetch_array(mysqli_query($db,$query2));
	echo"<br>";
	print_r($row2);
	$pre_req= $row2["pre_requisite"];
	print_r($pre_req);
	echo "<br>";
	$pre=preg_split("/[\,]/",$pre_req);
	foreach($pre as $arr)
	{
		//here pre_req check will happen
		echo $arr."<br>";
		$id=$arr;
		$query3="SELECT * FROM works WHERE task_id='$id'";
		$row=mysqli_fetch_array(mysqli_query($db,$query3));
		//print_r($row);
		$progress=$row["progress"];
		if($progress != 100)
		{
			echo "Can not start work";
		}
		else{
			echo "start work";
		}
	    echo "<br>";
	}
?>
</body>
</html>