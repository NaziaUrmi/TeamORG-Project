<!DOCTYPE html>
<html>
<head>
	<title>SubTask</title>
	<link rel="stylesheet" type="text/css" href="task_style.css">
</head>
<body>
	<header>
		<h2>SubTask</h2>
	</header>
	<form method="post" action="subt.php">
		 <?php  if (count($errors) > 0) : ?>
        <div class="error">
  	     <?php foreach ($errors as $error) : ?>
  	         <p><?php echo $error ?></p>
  	     <?php endforeach ?>
             </div>
    <?php  endif ?>
		<div class="input-group">
  		<label>Sub Task 1</label>
  		<input type="text" name="stask1" >
		</div>
		<div class="input-group">
  		<label>Sub Task 2</label>
  		<input type="text" name="stask2">
		</div>
		<div class="input-group">
  		<label>Sub Task 3</label>
  		<input type="text" name="stask3">
		</div>
		
		<div class="input-group">
  		<button type="submit" class="btn" name="submit" onclick="window.location.href='index.html'">Submit</button>
		</div>
	</form>
</body>
</html>