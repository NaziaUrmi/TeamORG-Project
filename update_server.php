<?php
$db=mysqli_connect('localhost','root','','khosra');
session_start();
if(isset($_GET['id'])){
	
	$id = $_GET['id'];
    $_SESSION['lebu']=$id;
}
if(isset($_POST['submit'])){
	$d=$_SESSION['lebu'];
    $date = mysqli_real_escape_string($db,$_POST['date']);
    mysqli_query($db,"UPDATE works SET deadline='$date' WHERE task_id='$d'");
    header("location: progress.php");
}

mysqli_close($db);
?>