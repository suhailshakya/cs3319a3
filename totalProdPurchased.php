<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add purchases </title>
</head>
<body>

<!-- this files lists out all the customer purcases and the costs -->

<?php
      include 'connectdb.php';
?>
	
<?php
	$whichProduct=$_POST["productID"];
        $query = 'SELECT SUM(Quantity), cost, description, cost*SUM(Quantity) FROM product, purchases WHERE product.prodID=purchases.prodID AND product.prodID="' . $whichProduct . '" GROUP BY purchases.prodID'; 
	$result = mysqli_query($connection, $query);
	//echo $query;
	
        if(!$result){
                die("failure to load database");
        }
	while($row=mysqli_fetch_assoc($result)){
                //echo "Product ID: ". $row["prodID"]. "<br>";
		echo $row["description"];
		echo "<br>";
		echo "Quantity: ". $row["SUM(Quantity)"];
		echo "<br>";
		echo "Cost: ". $row["cost"]. "<br>";
		echo " Total cost: $";
		echo $row["cost*SUM(Quantity)"];
        }
	mysqli_free_result($result);
?>

</ol>
<?php
     	mysqli_close($connection);
?>
</body>
</html>
