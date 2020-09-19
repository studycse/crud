<?php

 include 'dbcon.php';
 $id=$_GET['id'];

 $query="delete from registertable2 where id=$id";

	$result= mysqli_query($connect,$query);
	header('location:page.php');

?>