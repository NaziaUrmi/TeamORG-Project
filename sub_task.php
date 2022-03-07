<?php include("sub_task_ser.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sub Task</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js">
	</script>
	<link rel="stylesheet" type="text/css" href="subt_style.css">
</head>
<body>
	<header>
		<h1>Sub Task</h1>
	</header>
	<form method="post" action="sub_task.php" name="add_me" id="add_me">
		<table id="dynamic">
		<label> Sub Task </label>
		<input type="text" name="name[]" placeholder="Enter Sub Task" class="txt">
		<button type="button" name="add" id="add_input" class="btn">Add</button>
		</table>
		<button  id="submit" name="submit" class="sub">Submit</button>
		 <p>
            <a href="index-MANAGER.html">Go Back</a>
         </p>
	</form>
</body>
</html>

<script>
	$(document).ready(function(){
		var i=1;
		$('#add_input').click(function(){
			i++
			$('#dynamic').append('<tr id="row'+i+'"><td><label> Sub Task </label><input type="text" name="name[]" placeholder="Enter Sub Task" class="txt"></td><td><button name="remove" id="'+i+'" class="btn_remove">Remove</button></td></tr>');
		});
		$(document).on('click','.btn_remove',function(){
			var button_id = $(this).attr("id");
			$('#row'+button_id+'').remove();
		});
	});
			
	
</script>