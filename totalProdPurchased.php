<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Uh HUH </title>
</head>
<body>
<h1> Total number of purchases per product</h1>
<?php
        include 'connectdb.php';
?>
<ol>
<?php
   $whichProduct = $_POST["productID"];
//   echo "Product: ". $whichProduct;
   $query = 'SELECT * FROM purchases, product WHERE product.prodID="' .$whichProduct. '" AND product.prodID=purchases.prodID';
   echo $query;
   $result = mysqli_query($connection, $query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<li>". "Product ID: ". $row["prodID"];
	echo "<br>". "Product: ". $row["description"];
        echo "<br>". "Cost: " . $row["cost"];
        echo "<br>". "Quantity: ". $row["Quantity"]. "</li>";
//	echo "<br>". "Total Sales: ". $row["(Quantity*cost)"]. "</li>";
     }
     mysqli_free_result($result);
?>
</ol>

<?php
   mysqli_close($connection);
?>
</body>
</html>

