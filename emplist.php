<?php
// Create connection
$db="khosra";
$conn=mysqli_connect("localhost", "root","",$db);

?>



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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TEAM(O)RG</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

   </head>
   <bodyid="page-top">
   
   
     
<caption><strong><h2>Employees</h2></strong></caption>

     <div class="maincontent">
 			<br><br/>
 			<table class = "emptable">
 				<br><br><br>
 				<!--caption><strong><h2>Employees</h2></strong></caption-->
        
 				<th>ID</th>
 				<th>Name</th>
 				<th>Email</th>
 				<th>Phone</th>
				<th>Hire Date</th>
				<th>Salary</th>
				<th>Qualification</th>
				<th>Sector</th>
				<th>Manager</th>
				<!--<th>Password</th>-->

 				<?php

 					$sql = "SELECT * FROM employees";
 					$result = $conn->query($sql);

 					if ($result==true) {
 						// output data of each row
 						while($row = $result->fetch_assoc()) {

 							echo "<tr>";

                                echo "<td>".$row['employee_ID']."</td>";

 								echo "<td>".$row['name']."</td>";

 								echo "<td>".$row['email']."</td>";

 								echo "<td>".$row['phone_num']."</td>";

 								echo "<td>".$row['hire_date']."</td>";
								
								echo "<td>".$row['salary']."</td>";
								
								echo "<td>".$row['qualification']."</td>";
								
								echo "<td>".$row['sector_ID']."</td>";
								
								echo "<td>".$row['manager_ID']."</td>";
								
								/*echo "<td>".$row['pass']."</td>"*/;

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


   </body>
 </html>
