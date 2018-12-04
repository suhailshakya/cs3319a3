<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Add New Customer</title>
</head>
<body>
<!--this file lets you add a new customer to the database and update the table-->
        <?php
            include 'connectdb.php';
        ?>

<?php        
	$firstname = $_POST["cfirstname"];
        $lastname = $_POST["clastname"];
        $city = $_POST["ccity"];
        $customerID = $_POST["customerID"];
        $phone = $_POST["phone"];
        $agentID = $_POST["agentID"];

        $query = 'INSERT INTO customer (cusID, firstname, lastname, city, phonenumber, agentID) VALUES ("' . $customerID . '", "' . $firstname . '", "' . $lastname . '", "' . $city . '", "' . $phone . '", "' . $agentID . '")';
        $queryb = 'SELECT * FROM customer WHERE customer.cusID="' . $customerID . '"';
        $queryc = 'SELECT * FROM customer';
        $result = mysqli_query($connection, $query);
        $resultb = mysqli_query($connection, $queryb);
        $resultc = mysqli_query($connection, $queryc);

        if($result){
             die("Selected Customer ID is already in use. Select another Customer". "<br>");
        }
	
        while($row=mysqli_fetch_assoc($resultc)){
                echo "Customer ID: ". $row["cusID"];
                echo "<br>";
		echo "Name: ". $row["firstname"]. " ". $row["lastname"];
                echo "<br>";
		echo "City: ". $row["city"];
                echo "<br>";
		echo "Phone number: ". $row["phonenumber"];
                echo "<br>";
		echo "AgentID: ". $row["agentID"]. "<br>". "<br>";
        }
        mysqli_free_result($resultc);
?>
</ol>
<?php
	mysqli_close($connection);
?>
	
</body>
</html>
