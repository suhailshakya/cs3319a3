<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add purchases </title>
</head>
<body>

<!-- this files lets you ad-->

        <?php
            include 'connectdb.php';
        ?>

<?php
        $whichCustomer = $_POST["customers"];
        $whichProduct = $_POST["productID"];
        $whichProductQuantity = $_POST["productQ"];

        $query = 'SELECT * FROM (INSERT INTO purchases(cusID, prodID, Quantity) VALUES(' . $whichCustomer . ', ' . $whichProduct . ', ' . $whichProductQuantity . '))';
        //$query2 = 'SELECT * FROM purchases';
        $query3 = 'UPDATE purchases SET Quantity= "' . $whichProductQuantity . '" WHERE purchases.cusID="' . $whichCustomer . '" AND purchases.prodID="' . $whichProduct . '" ';
        $result = mysqli_query($connection, $query);
        //$result2 = mysqli_query($connection, $query2);
        $result3 = mysqli_query($connection, $query3);

        if(!$result){
		echo $query;
                die("failure");
		echo $query;
		echo $query3;
        }
        if($result3){
                while($row=mysqli_fetch_assoc($result)){
                        echo '<li>';
                        echo $row["cusID"]. " ";
                        echo $row["prodID"]. " ";
                        echo $row["description"]. " ";
                }
        }
	else{
		while($row=mysqli_fetch_assoc($result)){
                        echo '<li>';
                        echo $row["cusID"]. " ";
                        echo $row["prodID"]. " ";
                        echo $row["description"]. " ";
                }
        }
        mysqli_free_result($result);
?>
</body>
</html>
