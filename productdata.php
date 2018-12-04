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
     echo "Product ID: ". "<b>". $row["prodID"]. "</b>". " ";
     echo $row["description"]. " ";
     echo "Cost: ". "<b>". $row["cost"]. "</b>". " ";
     echo "Quantity on Hand: ". "<b>". $row["quantityonhand"]. "</b>";
     echo "<br>";
}
mysqli_free_result($result);
echo "</ol>";

?>

