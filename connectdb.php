<?php
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "Sonicx010";
$dbname = "lreid2assign2db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>
