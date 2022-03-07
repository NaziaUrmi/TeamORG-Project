<?php
$db=mysqli_connect('localhost','root','','khosra');
if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($db,"DELETE FROM sub_task WHERE task_ID='$id'");
mysqli_query($db,"DELETE FROM works WHERE task_id='$id'");
header("location: progress.php");
}
mysqli_close($db);
?>