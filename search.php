<?php
include 'dbcon.php';
//mysql_select_db("shikin", $conn);
//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['username'];
$mail = $_POST['email'];
echo $name;

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM registertable3 WHERE username LIKE '%$name%' or email LIKE '%$name%' or division LIKE '%$name%' ";
	$result = mysqli_query($connect,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> name						: '.$row['username'];
		echo '<br> email						: '.$row['email'];
		echo '<br> Division						: '.$row['division'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}

mysqli_free_result($result);
mysqli_close($connect);
}
}

?>

