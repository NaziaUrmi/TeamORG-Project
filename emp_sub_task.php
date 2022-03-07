<!DOCTYPE html>
 <html>
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


   <head>
     <meta charset="utf-8">
     <title>work doing</title>
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
 				<caption><strong><h2>Sub Task</h2></strong></caption>
        
 				
 				<th>ID</th>
 				
 				<th>Sub Task</th>
				<th>Status</th>

 				<?php
					session_start();
					$id="";
					$db="khosra";
                    $conn=mysqli_connect("localhost", "root","",$db);
					//to ge user id
					$user=$_SESSION['username'];
					$query1="SELECT * FROM employees WHERE name='$user'";
					$row=mysqli_fetch_array(mysqli_query($conn,$query1));
					$emp_id=$row["employee_ID"];
					//to get task id
					$query2="SELECT * FROM works WHERE Assigned_to='$emp_id'";
					$row2=mysqli_fetch_array(mysqli_query($conn,$query2));
					//print_r($row2);
					
					/*if(isset($_GET['id'])){
					$pre_req= $_GET['id'];
					}*/
					$val=$_SESSION['need'];
					$pre_req= $val;
					
					print_r($pre_req);

 					$sql = "SELECT * FROM sub_task WHERE task_ID='$pre_req'";
 					$result = $conn->query($sql);
					
						
 					if ($result==true) {
						
 						// output data of each row
 						while($row = $result->fetch_assoc()) {
							if($row['status']== 0)
							{
								echo "<tr>";
								
                                //echo $row['status']."<br>";
								

 								echo "<td>".$row['subtask_ID']."</td>";

 								

 								echo "<td>".$row['subtask']."</td>";
								
								echo "<td><a href='emp_sub_ser.php?id=" . $row['subtask_ID'] . "'> DONE</a></td>";
								//echo "<td><a href="#" onClick="commentSubmit()" class="button">APPROVE</a></td>";
							  //echo "<td><a href='delete.php?id=" . $row['id'] . "'> DELETE</a></td>";
								
							
			
								echo "</tr>";
							}
							
							

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
        <p><a href='emp_task.php'>BACK</a></p>

   </body>
 </html>