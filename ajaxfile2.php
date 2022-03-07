<?php
session_start();
$conn = new PDO("mysql:host=localhost;dbname=khosra", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$emp_id=$_SESSION['employee_ID'];
$pdostat = $conn->prepare("select task_id,date(DATE_SUB(deadline, INTERVAL 1 HOUR)),time(DATE_SUB(deadline, INTERVAL 1 HOUR)),date(deadline),time(deadline), task from works WHERE Assigned_by='$emp_id'");
$pdostat->execute();

$res = $pdostat->fetchAll(PDO::FETCH_NUM);
$tablecontent = "";

date_default_timezone_set('UTC');
$curdatetime=new DateTime(); //this returns the current UTC date time
///setting the UTC time to local time
if($_GET['offset']>=0) $curdatetime->sub(new DateInterval('PT'.abs($_GET['offset']).'H'));
else $curdatetime->add(new DateInterval('PT'.abs($_GET['offset']).'H'));
$result = $curdatetime->format('Y-m-d H:i:s');


foreach ($res as $row) {
    $dbdatetime=new DateTime($row[1]." ".$row[2]);
    $tmpresult=$dbdatetime->format('Y-m-d H:i:s');
    //echo $result." ".$tmpresult."<br/>";
    //echo strcmp($tmpresult, $result);
    if($curdatetime >= $dbdatetime) {

        $tablecontent .= "<tr>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[4]</td>
                            <td>$row[5]</td>
                        </tr>";
    }
}
echo $tablecontent;
?>

");
$pdostat->execute();

$res = $pdostat->fetchAll(PDO::FETCH_NUM);
$tablecontent = "";

date_default_timezone_set('UTC');
$curdatetime=new DateTime(); //this returns the current UTC date time
///setting the UTC time to local time
if($_GET['offset']>=0) $curdatetime->sub(new DateInterval('PT'.abs($_GET['offset']).'H'));
else $curdatetime->add(new DateInterval('PT'.abs($_GET['offset']).'H'));
$result = $curdatetime->format('Y-m-d H:i:s');


foreach ($res as $row) {
    $dbdatetime=new DateTime($row[1]." ".$row[2]);
    $tmpresult=$dbdatetime->format('Y-m-d H:i:s');
    //echo $result." ".$tmpresult."<br/>";
    //echo strcmp($tmpresult, $result);
    if($curdatetime >= $dbdatetime) {

        $tablecontent .= "<tr>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[4]</td>
                            <td>$row[5]</td>
                        </tr>";
    }
}
echo $tablecontent;
?>

