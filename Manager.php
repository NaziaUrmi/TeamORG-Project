<!DOCTYPE html>
<html>
<head>
<title>Manager</title>
<link rel="stylesheet" type="text/css" href="mn_style.css">
</head>
<body>
	<div class="header">
  	<h2>Manager</h2>
    </div >
	<div class="name">
		<p>Welcome <strong><?php session_start(); echo $_SESSION['username']; //echo $_SESSION['employee_ID'];?>
	</div>
	<div>
	<button class="btn1" onclick="window.location.href='task.php'">TASK</button>
	<button class="btn2" onclick="window.location.href='msgandinbox.php'">Message</button>
	<button class="btn3" onclick="window.location.href='emplist.php'">Employee List</button>
	<button class="btn3" onclick="window.location.href='progress.php'">Progress</button>
	<button class="btn3" onclick="window.location.href='testnoti.php'">Notifications</button>
	<button class="btn4" onclick="window.location.href='logout.php'">LOG OUT</button>
    </div>
	
	
</body>

</html>