<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname="test01";
$connect= mysqli_connect($hostname, $username, $password, $dbname);

	mysqli_set_charset($connect ,'utf8');

	if (!$connect) {
		die ('could not connect:' . mysql_error());
	}
mysqli_select_db($connect,"test01");
?>