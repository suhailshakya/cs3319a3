<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new user</title>
</head>
<body>

# this file lets you update the phone number of an existing customer

        <?php
            include 'connectdb.php';
        ?>

        <?php
            echo "<h1>update phone number of customer ";
            echo $_POST["customers"];
            echo "old number is: ";//get name and new number
            echo $_POST["phoneNumber"];
            echo "</h1>";
            $whichCustomer = $_POST["customername"]; //customer ID of the customer picked
            $phoneNumber = $_POST["phoneNumber"];

            $query='UPDATE Customer SET PhoneNumber="'.$phoneNumber.'" where CustomerID="'.$whichCustomer.'"';//query to update
            $result = mysqli_query($connection, $query);
           
	    if (!$result) {
                die("databases query failed.");
            }
            else {
                 echo "Updated number";
            }
            mysqli_close($connection);
        ?>

        <form action="index.php" method="post">
             <input type="submit" value="Go back to homepage">
        </form>
    </body>
</html>
