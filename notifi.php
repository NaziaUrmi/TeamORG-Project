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
        
<h4>All Notifications</h4>
        <table style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Deadline</th>
					<th>Dead</th>
					<th>Deadlin</th>
					<th>Start Da</th>
        
                    <th>Notifications</th>
                </tr>
            </thead>
            <tbody id="tablebody">
                <?php
///drawing the table here
                $conn = new PDO("mysql:host=localhost;dbname=khosra", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $pdostat = $conn->prepare("select task_id,date(DATE_SUB(deadline, INTERVAL 1 HOUR)),time(DATE_SUB(deadline, INTERVAL 1 HOUR)),date(deadline),time(deadline), task from works");
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
                    <th>Deadline</th>
					<th>Dead</th>
					<th>Deadlin</th>
					<th>Start Da</th>
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

                ajaxreq.open("get", "ajaxfile.php?offset=" + offset, true);
                ajaxreq.send();
            }
            ajaxfn();
            setInterval(ajaxfn, 5000);/// calling the function every 5 seconds
        </script>

    </body>
</html>
