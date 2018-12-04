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
<h2>When customer purchase more than entered quantity</h2>

<ol>
<?php
     	$whichProd = $_POST["ProductID"];
        $query = 'SELECT * FROM product, customer, purchases WHERE customer.cusID=purchases.cusID AND purchases.Quantity>"' . $whichProd . '" AND purchases.prodID=product.prodID';
        $result = mysqli_query($connection, $query);

        if(!$result){
                die("Query FAIled");
        }
	while($row=mysqli_fetch_assoc($result)){
		echo $row["firstname"]. " ". $row["lastname"];
                echo "<br>";
		echo $row["description"];
		echo "<br>";
		echo "Quantity: ". $row["Quantity"];
        }
	mysqli_free_result($result);
?>

</ol>
<?php
     	mysqli_close($connection);
?>

</body>
</html>

