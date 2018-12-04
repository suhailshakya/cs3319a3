<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add purchase to list</title>
</head>
<body>

# this files lets you add purchases to the database

        <?php
            include 'connectdb.php';
        ?>

<?php
        $whichCustomer=$_POST["cutomernames"];
        $whichProduct=$_POST["productnames"];
        $whichProductQuantity=$_POST["productquantity"];

        $query = 'INSERT INTO purchases(cusID, prodID, Quantity)VALUES('. $whichCustomer. '" AND prod
        $query2 = 'SELECT * FROM purchases';
        $query3 = 'UPDATE purchases SET Quantity= "' . $whichProductQuantity . '"
        $result = mysqli_query($connection, $query);
        $result2 = mysqli_query($connection, $query2);
        $result3 = mysqli_query($connection, $query3);

        if(!$result2){
                die("database");
        }
        if($result3){
                while($row=mysqli_fetch_assoc($result2)){
                        echo'<li>';
                        echo$row["cusID"];
                        echo$row["prodID"];
                        echo$row["description"];
                }
        }
	else{
		while($row=mysqli_fetch_assoc($result2)){
                        echo'<li>';
                        echo$row["cusID"];
                        echo$row["prodID"];
                        echo$row["description"];
                }
        }
        mysqli_free_result($result2);
?>
</body>
</html>
