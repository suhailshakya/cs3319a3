<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add purchases </title>
</head>
<body>

<!-- this files lets you add customer purchases-->

        <?php
            include 'connectdb.php';
        ?>

<?php
        $whichCustomer = $_POST["customers"];
        $whichProduct = $_POST["productID"];
        $whichProductQuantity = $_POST["productQ"];

        $query = 'INSERT INTO purchases(cusID, prodID, Quantity) VALUES(' . $whichCustomer . ', ' . $whichProduct . ', ' . $whichProductQuantity . ')';
        $queryb = 'SELECT * FROM purchases';
        $queryc = 'UPDATE purchases SET Quantity= "' . $whichProductQuantity . '" WHERE purchases.cusID="' . $whichCustomer . '" AND purchases.prodID="' . $whichProduct . '" ';
        $result = mysqli_query($connection, $query);
        $resultb = mysqli_query($connection, $queryb);
        $resultc = mysqli_query($connection, $queryc);

        if(!$resultb){
                die("failed to load database");
        }
        if($resultc){
                while($row=mysqli_fetch_assoc($resultb)){
			echo "Customer ID: ". $row["cusID"]. "<br>";
			echo "Product ID: ". $row["prodID"]. "<br>";
			echo "Quantity: ". $row["Quantity"]. "<br>". "<br>";
                }
        }
	else{
		while($row=mysqli_fetch_assoc($resultb)){
			echo "Customer ID: ". $row["cusID"]. "<br>";
			echo "Product ID: ". $row["prodID"]. "<br>";
			echo "Quantity: ". $row["Quantity"]. "<br>". "<br>";
                }
        }
        mysqli_free_result($resultb);
?>

</ol>
<?php
     	mysqli_close($connection);
?>
</body>
</html>
