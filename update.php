<?php include('update_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Update</title>
  <link rel="stylesheet" type="text/css" href="ap_style.css">
</head>
<body>
  <div class="header">
  	<h2>Update Deadline</h2>
  </div>
	 
  <form method="post" action="update.php">
  	<div class="input-group">
  		<label>New Date</label>
  		<input type="datetime-local" name="date" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">Submit</button>
  	</div>
  </form>
</body>
</html>