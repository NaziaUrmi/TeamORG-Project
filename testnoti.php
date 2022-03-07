<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notification Template</title>

        <style>
            #add:hover{
                background-color: green;
                border:2px solid red;
            }

            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body> 
       <!-- <div style="background-color: #d1d1e0; margin:20px; padding: 20px;">
            <h4>Add New Notification</h4>
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                ID <input type="text" id="id" name="id" readonly>
                From Date <input type="date" id="fdate" name="sdate">
                Start Time <input type="time" id="stime" name="stime">
                To Date <input type="date" id="tdate" name="fdate">
                Finish Time <input type="time" id="ftime" name="ftime">
                <br/>
                <p><b><i>Notification Details:</i></b></p>
                <textarea id="details" name="details" style="width:100%;"></textarea>
                <input type="submit" style="padding:8px;" id="add" value="Add Notification">
            </form>
        </div>

        <?php
        //inserting values in the database
      /*  if (isset($_GET['id']) && $_GET['id'] != null && isset($_GET['sdate']) && $_GET['sdate'] != null && isset($_GET['stime']) && $_GET['stime'] != null && isset($_GET['fdate']) && $_GET['fdate'] != null && isset($_GET['ftime']) && $_GET['ftime'] != null && isset($_GET['details']) && $_GET['details'] != null) {
            //echo "<script>window.alert('Insertion section');</script>";

            try {
                $conn1 = new PDO("mysql:host=localhost;dbname=notifications", "root", "");
                $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "insert into notification values(" . $_GET['id'] . ",'" . $_GET['details'] . "','" . $_GET['sdate'] . " " . $_GET['stime'] . "','" . $_GET['fdate'] . " " . $_GET['ftime'] . "')";
                //echo $sql;
                $conn1->exec($sql);
                ///echo "<script>window.alert('Insertion successfull');</script>";
            } catch (PDOException $ex) {
                echo $ex;
            }
        }

        ///setting the consecutive id values

        try {
            $conn = new PDO("mysql:host=localhost;dbname=notifications", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pdostat = $conn->prepare("select ifnull(max(id),0)+1 as maxid from notification");
            $pdostat->execute();

            $res = $pdostat->fetchAll(PDO::FETCH_NUM);
            echo "<script>document.getElementById('id').value=" . $res[0][0] . ";</script>";
        } catch (PDOException $ex) {
            echo $ex;
        }*/
        ?>
-->

        <h4>All Notifications</h4>
        <table style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>Start Time</th>
                    <th>End Date</th>
                    <th>End Time</th>
                    <th>Notifications</th>
                </tr>
            </thead>
            <tbody id="tablebody">
                <?php
///drawing the table here
				session_start();
                $conn = new PDO("mysql:host=localhost;dbname=khosra", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$emp_id=$_SESSION['employee_ID'];
				
                $pdostat = $conn->prepare("select task_id,date(DATE_SUB(deadline, INTERVAL 1 HOUR)),time(DATE_SUB(deadline, INTERVAL 1 HOUR)),date(deadline),time(deadline), task from works WHERE Assigned_by='$emp_id'");
                $pdostat->execute();

                $res = $pdostat->fetchAll(PDO::FETCH_NUM);
                foreach ($res as $row) {
                    ?>

                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>



        <!-- this table will show the notification when the start time starts -->
        <h4>Current Notifications</h4>
        <table style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>Start Time</th>
                    <th>End Date</th>
                    <th>End Time</th>
                    <th>Notifications</th>
                </tr>
            </thead>
            <tbody id="tablebody1">

            </tbody>
        </table>

        <script>
            ///getting the local timezone
            var offset = new Date().getTimezoneOffset() / 60;
            function ajaxfn() {
                var ajaxreq = new XMLHttpRequest();
                ajaxreq.onreadystatechange = function () {
                    if (ajaxreq.status == 200 && ajaxreq.readyState == 4) {
                        console.log(ajaxreq.responseText);
                        document.getElementById("tablebody1").innerHTML = ajaxreq.responseText;
                    }
                }

                ajaxreq.open("get", "ajaxfile2.php?offset=" + offset, true);
                ajaxreq.send();
            }
            ajaxfn();
            setInterval(ajaxfn, 5000);/// calling the function every 5 seconds
        </script>

    </body>
</html>
