<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Uh HUH </title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Customers with higher quantities: </h1>
<ol>
<?php
   $whichQuantity = $_POST["NumberQuantity"];
   $query = 'SELECT * FROM purchases, customer, product WHERE customer.cusID=purchases.cusID AND purchases.Quantity > "' . $whichQuantity . '" AND purchases.prodID=product.prodID';
	//echo $query;
   $result = mysqli_query($connection, $query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo $row["firstname"];
        echo " -- ";
        echo $row["description"];
	echo " -- ";
	echo $row["Quantity"]. "</li>";
     }
     mysqli_free_result($result);
?>
</ol>

<?php
   mysqli_close($connection);
?>
</body>
</html>

