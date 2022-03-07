<?php include('emp_ser.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LOG IN</title>
  <link rel="stylesheet" type="text/css" href="ap_style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="emp_log.php">
  	  
    <?php  if (count($errors) > 0) : ?>
        <div class="error">
  	     <?php foreach ($errors as $error) : ?>
  	         <p><?php echo $error ?></p>
  	     <?php endforeach ?>
             </div>
    <?php  endif ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	<div class="input-group">
  		<label>Working Under</label>
  		<input type="number" name="num">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Want to apply? <a href="apply.php">Apply</a>
  	</p>
  </form>
</body>
</html>