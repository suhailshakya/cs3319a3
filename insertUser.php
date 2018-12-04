<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Add a New Customer</title>
</head>
<body>
# this file lets you add a new customer to the database and update the table
        <?php
            include 'connectdb.php';
        ?>

<?php        
	$whichCustomerFN=$_POST["newcustomerfirstname"];
        $whichCustomerLN=$_POST["newcustomerlastname"];
        $whichCustomerCity=$_POST["newcustomercity"];
        $whichCustomerID=$_POST["newcustomerID"];
        $whichCustomerPhone=$_POST["newcustomerphone"];
        $whichCustomeragentID=$_POST["newcustomeragentID"];

        $query='INSERT INTO customer (cusID, firstname, lastname, city, phonenu$
        $query2='SELECT * FROM customer WHERE cusID="' . $whichCustomerID . '"';
        $query3='SELECT * FROM customer';
        $result=mysqli_query($connection,$query);
        $result2=mysqli_query($connection,$query2);
        $result3=mysqli_query($connection,$query3);

        if($result2){
             echo "Selected Customer ID is already in use. Select another Customer";
        }

        while($row=mysqli_fetch_assoc($result3)){
                echo "<li>";
                echo "Customer ID: ";
                echo $row["cusID"];
                echo "</br>". "Name: ";
                echo $row["firstname"]. " ";
                echo $row["lastname"];
                echo "</br>". "City: ";
                echo $row["city"];
                echo "</br>". "Phone number: ";
                echo $row["phonenumber"];
                echo "</br>". "AgentID: ";
                echo $row["agentID"]. "</li>";
        }
        mysqli_free_result($result3);
?>
	
</body>
</html>
