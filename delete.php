<?php
$db=mysqli_connect('localhost','root','','khosra');

if(isset($_GET['task_id'])){
	$id = $_GET['task_id'];
mysqli_query($db,"DELETE * FROM works WHERE task_id='$id'");
header("location: progress.php");
}
mysqli_close($db);
?>