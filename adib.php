<html>

	<head>
		<title>HomePage</title>
	</head>

	<body>
	
	<form method="get" action="#">
		User Name: <input type="text" id="uname" name="uname"> <br/>
		Password: <input type="password" id="pass" name="pass"> <br/>
		<input type="submit" value="Log In">
		<input type="button" value="Show Dropdown Box" onclick="Draw();">
	</form>
	
	
	
	<div id="showdropdown" style="background-color:green;height:200px;width:100%;border:2px solid blue;">
	
	<img style="height:50px;width:50px;" src="data:image/jpeg;base64,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">
	
	</div>
	
	<script>
	function Draw(){
	
		document.getElementById('showdropdown').innerHTML="<select>"+
		"<option value=\"1\">BD</option>"+
		"<option value=\"2\">USA</option>"+
		"<option value=\"3\">UK</option>"+
		"<option value=\"4\">SG</option>"+
		"<option value=\"5\">PK</option>"+
	"</select>";
	document.getElementById('showdropdown').style="background-color:#b3e6ff";
	}
	
	</script>
        
        
        <?php
        $loginuser="";
        $loginpass="";
        
        if(isset($_GET['uname']) && isset($_GET['pass'])){
            $loginuser=$_GET['uname'];
            $loginpass=$_GET['pass'];
        }
        
            $username="root";
            $pass="";
            $serveraddr="localhost";
            $dbname="logindb";
            
            try{
                $conn=new PDO("mysql:host=$serveraddr;dbname=$dbname",$username,$pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $stmt="Select * from users";
                $pdostmt=$conn->prepare($stmt);
                $pdostmt->execute();
                $res=$pdostmt->fetchAll(PDO::FETCH_NUM);
                
                
                for($it=0;$it<count($res);$it++){
                    if($loginuser==$res[$it][0] && $loginpass==$res[$it][1]){
                        echo "<script>window.location.assign('homepage.php');</script>";
                    }
                }
                
                
            }catch(PDOException $ex){
                ///echo "<script>window.alert('database not connected');</script>";
            }
            
        ?>
        
	

	</body>

</html>