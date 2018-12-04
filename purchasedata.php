<?php
$query3 = "SELECT * FROM purchases";

$result = mysqli_query($connection,$query3);
if (!$result) {
    die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {

    //echo '<input type="radio" name="Quantity" value="';
    //echo $row["Quantity"];
    //echo '">';

     echo "<li>". "Customer ID: ". $row["cusID"]. " -- ";
     echo "Product ID: ". $row["prodID"]. " -- ";
     echo "Quantity: ". $row["Quantity"]. "<br>". "</li>";
}
mysqli_free_result($result);
echo "</ol>";

?>
