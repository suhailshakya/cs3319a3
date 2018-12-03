<?php
$query2 = "SELECT * FROM customer ORDER BY lastname";

$result = mysqli_query($connection, $query2);
if (!$result) {
    die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="customers" value="'; 
     echo $row["cusID"];
     echo '">';
     echo $row["cusID"];
     echo $row["firstname"]. " ";
     echo "<b>". $row["lastname"]. "</b>" . " ";
     echo $row["city"]." ";
     echo $row["phonenumber"];
     echo "<br>";
}
mysqli_free_result($result);
echo "</ol>";

?>
