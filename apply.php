<?php include('server.php')?>
<!DOCTYPE html>
<html>
    <head>
        <title>Apply</title>
        <link href="ap_style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div class="header">
            <h2>Apply</h2>
        </div>
        <form method="post" action="apply.php">
            
            <?php  if (count($errors) > 0) : ?>
                <div class="error">
  	                <?php foreach ($errors as $error) : ?>
  	                <p><?php echo $error ?></p>
  	                 <?php endforeach ?>
                </div>
             <?php  endif ?>
            <!-- validation errors are here -->
            
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Phone Number</label>
                <input type="number" name="num">
            </div>
			<div class="input-group">
                <label>NID</label>
                <input type="number" name="num1">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="apply">Apply</button>
            </div><br/>
            <p>
                Already an employee? <a href="loggin.php">Log In</a>
            </p>
            <p>
                <a href="index.html">Back Home</a>
            </p>
        </form>
        
        

    
    
    
    </body>



























</html>