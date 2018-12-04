<html>
<head>

<title>descend </title>
</head>
<body>
<?php 
	include 'connectdb.php';
?>

<h2> Products in descending order by price</h2>

<!--order products is descending order by price-->
<ol>
<?php	
	$query = 'SELECT * FROM product ORDER BY cost DESC';
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("database query fail");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo "<li>";
		echo "Product ID: ";
		echo $row["prodID"]. "<br>";
		echo "Product Name: ";
		echo $row["description"]. "<br>";
		echo "Product cost: ";
		echo $row["cost"]. "<br>". "</li>";
	}
	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>
