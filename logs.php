<?php

$db=mysqli_connect('localhost','root','','khosra');
$result = mysqli_query($db, "SELECT * FROM works");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='delete.php?id=" . $row['task_id'] . "'> X</a></h4>";
echo "<h1>" . $row['name'] . "</h1>";
echo "<h2>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3>" . $row['comments'] . "</h3>";
echo "</div>";
}
mysqli_close($db);

?>