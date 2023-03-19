<?php
$host="localhost:3308";
$dbuser="root";
$dbpass="";
$dbname="student";
//making connetion
$conn=mysqli_connect($host, $dbuser, $dbpass, $dbname) or die("Unable to connect to database");
?>