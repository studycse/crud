<?php

 include 'dbcon.php';
 $id=$_GET['id'];

 $query="delete from testtable where id=$id";

	$result= mysqli_query($connect,$query);
	header('location:display.php');

?>