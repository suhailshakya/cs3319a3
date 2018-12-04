<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Assignment 3 </title>
</head>
<body>
<?php include 'connectdb.php'; ?>
<h1> Updatable Tables </h1>
<h2> Tables: </h2>


<h3> Agent </h3>
<?php
   include 'agentdata.php';
?>



<h3> Products </h3>
<form action="orderAscending.php" method="post">
	<?php
   		include 'productdata.php';
	?>
	<button type="submit" name="submit">Descending Order</button>
	<input type="submit" value="Ascending Order">
</form>
<br>
<form action="totalProdPurchased.php" method="post">
	Enter the Product ID:
	<br>
	<input type="number" name="value"><input type="submit">
<br>Click submit to get more info on products
</form>



<h3> Purchases </h3>
<?php
   include 'purchasedata.php';
?>




<table style="width:200%">
    <tr>
        <td>
            <h3> Customers </h3>
            <form action="displayAllPurchased.php" method="post">
                <?php
                    include 'customerdata.php';
                ?>
		<label for="customerdisp">Display all product purchased by customer</label>
                <input type="submit" value="Display">
            </form>
        </td>
        <td>
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
	<td>
	    <h3>Update user phone number</h3>
            <form action="update.php" method="post">
                <?php
	    	     include 'customerdata.php';
                ?>
                <label for="phoneNumber">New phone number</label>
                <input type="text" name="phoneNumber" value="New phone number">
                <button type="submit" id="updateNumber">Update customer phone number</button>
            </form>
        </td>
    </tr>
</table>


<h4> Enter Quantity </h4>
<form action="moreQuantity.php" method="post">
	<input type="text" name="NumberQuantity">
	<input type="submit" value="Display Quantity and Description">
</form>



<h4> List Description </h4>
<form action="productNotPurchased.php" method="post">
	<input type="submit" id="descriptionList" value="Hit to get Description List">
</form>


<ol>
<?php
mysqli_close($connection);
?>
</ol>
</body>
</html>
