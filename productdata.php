<?php
$query4 = "SELECT * FROM product ORDER BY description";

$result = mysqli_query($connection, $query4);
if (!$result) {
    die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="productID" value="';
     echo $row["prodID"];
     echo '">';
     echo "<li>";
     echo "Product ID: ". $row["prodID"]. "<br>";
     echo $row["description"]. "<br>";
     echo "Cost: ". $row["cost"]. "<br>";
     echo "Quantity on Hand: ". $row["quantityonhand"]. "</li>";
     echo "<br>";
}
mysqli_free_result($result);
echo "</ol>";

?>

