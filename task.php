<?php include('task_ser.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
	<link rel="stylesheet" type="text/css" href="task_style.css">
</head>
<body>
	<header>
		<h2>Task</h2>
	</header>
	<form  id="myform" method="post" action="task.php">
		 <?php  if (count($errors) > 0) : ?>
        <div class="error">
  	     <?php foreach ($errors as $error) : ?>
  	         <p><?php echo $error ?></p>
  	     <?php endforeach ?>
             </div>
    <?php  endif ?>
		<div class="input-group">
  		<label>Task Id:</label>
  		<input type="text" name="taskid" id="taskid" readonly>
		</div>
		
		<?php 
			$db=mysqli_connect('localhost','root','','khosra');
			$query="SELECT max(task_id) as maxid FROM works";
			$row=mysqli_fetch_array(mysqli_query($db,$query));
			//just to check if row is working or not
			//print_r ($row);
			$task_id=$row["maxid"]+1;
			echo "<script> document.getElementById('taskid').value='".$task_id."'; </script>";
		?>
		
		<div class="input-group">
  		<label>Task</label>
  		<input type="text" name="task" >
		</div>
		<div class="input-group">
  		<label>Description</label>
  		<input type="text" name="des">
		</div>
		<div class="input-group">
  		<label>Pre-requisite Tasks:</label>
  		<input type="number_format" name="prereq" id="prereq"><input type="button" onclick="addme();" value="Add"><br/>
		<div id="prerequisites"></div>
		
		<script>
		var arr=[];
		
		function addme(){
			var val=document.getElementById("prereq").value;
			if(val != "" ){
				arr.push(val);
				///console.log(arr);
				var htmlcontent="";
				for(var i=0;i<arr.length;i++){
					htmlcontent+="<span style='background-color:green;border:1px solid outset;'>"+arr[i]+"<button onclick='deleteme("+i+");'>X</button></span>"
				}
				document.getElementById('prerequisites').innerHTML=htmlcontent;
			}
		}	
		
		function deleteme(id){
			arr.splice(id,1);
			var htmlcontent="";
				for(var i=0;i<arr.length;i++){
					htmlcontent+="<span style='background-color:green;border:1px solid outset;'>"+arr[i]+"<button onclick='deleteme("+i+");'>X</button></span>"
				}
				document.getElementById('prerequisites').innerHTML=htmlcontent;
		}
		
		
		</script>
		
		</div>
		<div class="input-group">
  		<label>Dependent 2</label>
  		<input type="number_format" name="dep" id="dep"><input type="button" onclick="addmee();" value="Add"><br/>
		<div id="dependency"></div>
		
		<script>
		var ar=[];
		
		function addmee(){
			var val=document.getElementById("dep").value;
			if(val != "" ){
				ar.push(val);
				console.log(ar);
				var htmlcontent="";
				for(var i=0;i<ar.length;i++){
					htmlcontent+="<span style='background-color:green;border:1px solid outset;'>"+ar[i]+"<button onclick='deletemee("+i+");'>X</button></span>"
				}
				document.getElementById('dependency').innerHTML=htmlcontent;
			}
		}	
		
		function deletemee(id){
			arr1.splice(id,1);
			var htmlcontent="";
				for(var i=0;i<ar.length;i++){
					htmlcontent+="<span style='background-color:green;border:1px solid outset;'>"+ar[i]+"<button onclick='deletemee("+i+");'>X</button></span>"
				}
				document.getElementById('dependency').innerHTML=htmlcontent;
		}
		
		
		</script>
		
		
		
		
		</div>
		<div class="input-group">
  		<label>Dead Line</label>
  		<input type="datetime-local" name="date">
		</div>
	
		<div class="input-group">
  		<label>Assigned To</label>
  		<input type="number_format" name="num">
		</div>
		
		
		<input type="hidden" id="preqarr" name="preqarr">
		<input type="hidden" id="deparr" name="deparr">
		<div class="input-group">
			<button type="submit" onclick="submitme();" class="btn" name="submit">Submit</button>
		</div>
		<script>
		function submitme(){
			console.log("The array"+arr.toString());
			document.getElementById('preqarr').value=arr.toString();
			document.getElementById('deparr').value=ar.toString();
			document.getElementById('myform').submit();
		}</script>
		
		
	</form>
</body>
</html>