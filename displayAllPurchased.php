<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your products:</h1>
<ol>

<?php
   $whichCustomer = $_POST["customers"];
   $query = 'SELECT * FROM purchases,customer,product WHERE customer.cusID="' . $whichCustomer . '" AND customer.cusID=purchases.cusID AND purchases.prodID=product.prodID';
   
   $result = mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
	echo $row["firstname"]. " ";
        echo $row["lastname"]. "<br>";
	echo "Product: ";
	echo $row["prodID"]. "<br>";
	echo "Description: ";
	echo $row["description"]. "<br>";
	echo "Quantity: ";
	echo $row["quantityonhand"]. "<br>". "</li>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
