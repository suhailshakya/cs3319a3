<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new user</title>
</head>
<body>

<!-- this file lets you update the phone number of an existing customer -->

        <?php
            include 'connectdb.php';
        ?>

        <?php
            echo "<h1>update phone number of customer ". "</h1>". "<br>";
            
            $whichCustomer = $_POST["customers"];
            $phoneNumber = $_POST["phoneNumber"];

            $query = 'UPDATE customer SET phonenumber="' .$phoneNumber. '" where customer.cusID="' .$whichCustomer. '"';//update query
            $result = mysqli_query($connection, $query);
           
	    if (!$result) {
                die("databases query failed.");
            }
            else {
                 echo "Updated number: ";
		 echo "$phoneNumber";
            }
            mysqli_close($connection);
        ?>

    </body>
</html>
