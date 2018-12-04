<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>  </title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Descriptions of all items that haven't been bought: </h1>
<ol>
<?php
/*
   $query = 'SELECT * FROM purchases JOIN product ON purchases.prodID=product.prodID WHERE purchases.Quantity;
*/
   $query = 'SELECT * FROM product WHERE product.prodID NOT IN (SELECT purchases.prodID FROM purchases)';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row["description"]. "<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
