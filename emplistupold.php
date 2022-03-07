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
   <body>
   
   
   

     


    <div class="container-fluid">
			
			
			<center><caption><strong><h2>Employees</h2></strong></caption></center>
			
			
			
			<table class = "emptable">
 				<br><br><br>
 				<caption><strong><h2>Employees</h2></strong></caption>
        
 				<th>ID</th>
 				<th>Name</th>
 				<th>Email</th>
 				<th>Phone</th>
				<th>Hire Date</th>
				<th>Salary</th>
				<th>Qualification</th>
				<th>Sector</th>
				<th>Manager</th>
				<th>Task</th>
				<!--<th>Password</th>-->

 				<?php

 					$sql = "SELECT * FROM employees WHERE manager_ID!=0";
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
								
								echo "<td><a href='task_info.php?id=" . $row['employee_ID'] . "'>INFO</a></td>";
								
								/*echo "<td>".$row['pass']."</td>"*/;

 							echo "</tr>";

 							}
 					} else {
 						echo ("<h1>List empty!</h1>");
 					}
 					$conn->close();
 				?>

 			</table>
        
 				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
