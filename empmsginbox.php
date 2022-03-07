<!DOCTYPE html>
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
</style>
<head>
</head>
<body>
	<div class="header">
    </div>
	<div>
	<button class="btn1" onclick="window.location.href='empsendtext.php'">Write a message</button>
	<button class="btn2" onclick="window.location.href='inbox.php'">Inbox</button>
    </div>
	
	
</body>

</html>