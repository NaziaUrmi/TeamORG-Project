<?php
$db=mysqli_connect('localhost','root','','khosra');
$temp=0;
	session_start();
	$db=mysqli_connect('localhost','root','','khosra');
	$user=$_SESSION['username'];
	$query1="SELECT * FROM employees WHERE name='$user'";
	$row=mysqli_fetch_array(mysqli_query($db,$query1));
	$emp_id=$row["employee_ID"];
	$query2="SELECT * FROM works WHERE Assigned_to='$emp_id'";
	$row2=mysqli_fetch_array(mysqli_query($db,$query2));
	//$task_id=$row2["task_id"]; //task_id
	$task_id= $_SESSION['need'];
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
			$temp++;
		}
		else{
			echo "start work";
		}
	    echo "<br>";
	}






if($temp==0)
{
    
	if(isset($_GET['id']))
	{
		
		$id = $_GET['id'];
		$query="UPDATE sub_task SET status=1 WHERE subtask_ID='$id' ";
	    mysqli_query($db,$query);
		echo "<br>";
		print_r($task_id);
		//below from count i got the total row of subtask of that specific task_ID. Now I have to calculate progress
		$query1="SELECT COUNT(subtask_ID) as total FROM sub_task WHERE task_ID= '$task_id' ";
		$values=mysqli_fetch_assoc(mysqli_query($db,$query1));
		$num_rows= $values['total']; //count of sub_task
		echo "<br>";
		echo "got from db $num_rows";
		echo "<br>";
		$val= 100 / $num_rows;
		echo "<br>";
		print_r($val);
		echo "<br>";
		$query3="SELECT * FROM works WHERE task_id='$task_id'";
		$roww2=mysqli_fetch_array(mysqli_query($db,$query3));
		print_r($roww2);
		$prog= $roww2["progress"];
		//print_r($prog);
		echo "<br>";
		$progress = ceil($prog + $val);
		//print_r($progress);
		if($progress >100) //100 korar jnno
		{
			$ex=$progress-100;
			$progress=$progress-$ex;  
		}
		
		$query4="UPDATE works SET progress='$progress' WHERE task_id='$task_id'";
		mysqli_query($db,$query4);
		
		header("location: emp_sub_task.php");
	}
}

else{
	header("location: emp_sub_task.php");
}
mysqli_close($db);
?>