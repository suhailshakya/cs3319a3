
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Assignment 3 </title>
</head>
<body>
<?php include 'connectdb.php'; ?>
<h1> Updatable Tables </h1>
    
    <table align="center" border="2">
        <tr>
            <td align="center">
                <h3> Customers </h3>
                    <form action="displayAllPurchased.php" method="post">
                        <?php
                            include 'customerdata.php';
                        ?>
                        <label for="customerdisp">Display all product purchased by customer</label><br><br>
                        <input type="submit" value="Display">
                    </form>
            </td>
            <td align="center">

                <h3> Products </h3>
                    <form action="orderDescending.php" method="post">
                        <?php
                            include 'productdata.php';
                        ?>
			Sort by Description
			<br>
                        <button type="submit" name="submit">Descending Order</button>
                    </form>

          	    <form action="orderAscending.php" method="post">
                        <button type="submit" name="submit">Ascending Order</button>
                    </form>

		    <form action="orderDescendingP.php" method="post">
                        Sort by Price
                        <br>
                        <button type="submit" name="submit">Descending Order</button>
                    </form>

		    <form action="orderAscendingP.php" method="post">
                        <button type="submit" name="submit">Ascending Order</button>
                    </form>

            </td>
        </tr>   
        <tr>
            <td align="center">
		<!-- insert new purchase by adding quantity and selecting cusID and prod ID-->
		<h3> Insert new purchase Properly </h3>
     		<form action="insertPurchase.php" method="post">
			<?php
			    include 'customerdata.php';
			    include 'productdata.php';
			?>			
			Enter Quantity Below
			<br>
			<input type="text" name="productQ">
			<br><br>
			<input type="submit" value="Get purchased products">
		</form>
      
            </td>
            <td align="center">
                <!-- insert customer -->
		<form action="insertUser.php" method="post">
			Enter customer first name:
			<input type="text" name="cfirstname">
			<br>
			Enter customer last name:
			<input type="text" name="clastname">
			<br>
			Enter customer city:
			<input type="text" name="ccity">
			<br>
			Enter customer ID:
			<input type="text" name="customerID">
			<br>
			Enter phone number:
			<input type="text" name="phone">
			<br>
			Enter agent ID:
			<input type="text" name="agentID">
			<br>
			<br>

			<input type="submit" value="Make new Customer!">
		</form>
            </td>
        </tr>
        <tr>
            <td align="center">
                <!-- update phone number of customers-->
                <h3>Update user phone number</h3>
                    <form action="update.php" method="post">
                        <?php
                         include 'customerdata.php';
                        ?>
                        <label for="phoneNumber">New phone number</label>
                        <input type="text" name="phoneNumber" value="New phone number"><br><br>
                        <button type="submit" id="updateNumber">Update customer phone number</button>
                    </form>
            </td>
            <td align="center">
		<!-- delete selected customer-->
                <h3> Select Customers to delete </h3>
                    <form action="deleteCustomer.php" method="post">
                       <?php
                          include 'customerdata.php';
                       ?>
                       <button type="submit" value="Delete"> Delete Customer
                       </button>
                    </form>
            </td>
        </tr>
        <tr>
            <td align="center">
		<!-- enter quantity and higher amounts of products is the answer -->
                <h4> Enter Quantity </h4>
                    <form action="moreQuantity.php" method="post">
                        <input type="text" name="ProductID"><br><br>
                        <input type="submit" value="Display Quantity and Description">
                    </form>

            </td>
            <td align="center">
                <h4> List Description </h4>
                    <form action="productNotPurchased.php" method="post">
                        <input type="submit" id="descriptionList" value="Hit to get Description List">
                    </form>
            </td>
        </tr>
        <tr>
            <td align="center">
		<!-- shows total quantity purchased for each product -->
                <form action="totalProdPurchased.php" method="post">
                    Enter the Product ID: <br>
                        <input type="text" name="productID">
			<input type="submit" value="Product Information">
                    <br>Click submit to get more info on products
                </form>
            </td>
            <td align="center">                
                <h3> Agent </h3>
                <?php
                   include 'agentdata.php';
                ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3> Purchases </h3>
                    <?php
                        include 'purchasedata.php';
                    ?>
            </td>
        </tr>    
    </table>


<ol>
<?php
mysqli_close($connection);
?>
</ol>
</body>
</html>
