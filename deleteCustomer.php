<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User</title>
</head>
<body>
    <?php
        include 'connectdb.php';
    ?>
    <?php
    //script to remove a certain user
        echo "<h1>remove customer ";
        echo $_POST["customers"];
        echo "</h1>";
        $whichCustomer = $_POST["customers"]; 
        $query='DELETE FROM sustomer where cusID="' .$whichCustomer. '"';
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "<p>Selected user has purchased products, cannot remove this guy. </p>";
        }
        else {
             echo "<p>Selected customer has been deleted. </p>";
        }
        mysqli_close($connection);
    ?>


<!--
    <form action="indexPage.php" method="post">
         <input type="submit" value="Home Page">
    </form>
-->

</body>
</html>
