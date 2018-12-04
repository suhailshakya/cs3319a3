<!DOCTYPE html>
<html>
<head>
<title>Ascend</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h2> Products in Ascending order by description</h2>

<ol>
<?--this file orders products in Ascending order-->

<?php
        $query = 'SELECT * FROM product ORDER BY description';
        $result = mysqli_query($connection, $query);
        if(!$result){
                die("database query failed");
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


