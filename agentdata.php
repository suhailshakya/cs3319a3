<?php
$query = "SELECT * FROM agent";

$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>";
     echo $row["firstname"];
        echo " ";
     echo $row["lastname"];
        echo " ";
     echo $row["city"];
	echo ", ";
     echo "Commission: ";
     echo $row["commission"];
	echo " ";
     echo "Agent ID: ";
     echo $row["agentID"] . "</li>";
}
mysqli_free_result($result);
echo "</ol>";

?>
