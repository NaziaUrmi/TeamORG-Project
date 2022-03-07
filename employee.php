!DOCTYPE html>
<html>
<style>
*
{
	margin: 0;
	padding: 0;
}

body{
    font-size: 120%;
    background: #F8F8FF;
     background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(cover.png);
	height: 100vh;
	background-size: cover;
	background-position: center;

}
.header
{
  width: 30%;
  margin: 120px auto 0px;
  color: white;
  background: #5f83a0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;

}
.name{
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    background: white;
    border-radius: 0px 0px 0px 0px;

}
div {
	 width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
.btn1{
  height: 43px;
  width: 53%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;

	}
.btn2{
  height: 43px;
  width: 53%;
 
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;

	}
	
	.btn4{
     height: 34px;
    width: 36%;
    padding: 5px 10px;
    border-color: red;
    background-color: #FF0066;
    /* right: 32px; */
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;

	}
</style>
<head>
<title>employee</title>
</head>
<body>
	<div class="header">
  	<h2>EMPLOYEE</h2>
    </div >
	<div class="name">
		<p>Welcome <strong><?php session_start(); echo $_SESSION['username'];?>
	</div>
	<div>
	<button class="btn1" onclick="window.location.href='emp_task.php'">Work To Do</button>
	<button class="btn2" onclick="window.location.href='empmsginbox.php'">Message</button>
	<button class="btn4" onclick="window.location.href='logout.php'">LOG OUT</button>

    </div>
	
	
</body>

</html>