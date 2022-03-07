<!DOCTYPE html>
 <html>


   <head>
     <meta charset="utf-8">
     <title></title>
	 <caption><strong><h2>Task Progress</h2></strong></caption>
	 
   </head>
   <body>
   
  <!-- <form method="post" action="cmnt.php">
     	<div class="input-group">
  		<button type="submit" class="btn" name="approve">APPROVE</button>
  	</div>
	</form>-->
     


     <div class="maincontent">
 			<br><br/>
 			<table class = "emptable">
 				<br><br><br>
 			<!--	<caption><strong><h2>Task Progress</h2></strong></caption>-->
        
 				<th>ID</th>
 				<th>Task</th>
 				
 				<th>Assigned To</th>
				 <th>DEAD LINE</th>
 				<th>Progress (%)</th>				
				<th>Delete</th>
				<th>Update</th>

 				<?php
					session_start();
					$id="";
					$db="khosra";
                    $conn=mysqli_connect("localhost", "root","",$db);
					
					$user=$_SESSION['username'];
                    $query="SELECT * FROM employees where name='$user'";
                    mysqli_query($conn,$query);
                    $row=mysqli_fetch_array(mysqli_query($conn,$query));
                    //print_r($row);
					//echo "<br>";
                    $id=$row["employee_ID"];
                    print_r($id);
 					$sql = "SELECT * FROM works where Assigned_by=$id";
 					$result = $conn->query($sql);
 				 

 					if ($result==true) {
 						// output data of each row
 						while($row = $result->fetch_assoc()) {

 							echo "<tr>";

                                echo "<td>".$row['task_id']."</td>";

 								echo "<td>".$row['task']."</td>";
 								echo "<td>".$row['Assigned_to']."</td>";
  								echo "<td>".$row['deadline']."</td>";								

 								echo "<td>".$row['progress']."</td>";
								
								echo "<td><a href='taskdel.php?id=" . $row['task_id'] . "'> DELETE</a></td>";
								echo "<td><a href='update.php?id=" . $row['task_id'] . "'>Update</a></td>";

								//echo "<td><a href="#" onClick="commentSubmit()" class="button">APPROVE</a></td>";
							//echo "<td><a href='delete.php?id=" . $row['id'] . "'> DELETE</a></td>";
								
							
			
 							echo "</tr>";
							
							

 							}
 					} else {
 						echo ("<h1>List empty!</h1>");
 					}
 					$conn->close();
 				?>

 			</table>
 			<br />
 			<br />
 			<br />
 			<br />
 		</div>
		<p>
            <a href="index-MANAGER.html">Go Back</a>
         </p>


   </body>
     <style>
.emptable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

 </html>