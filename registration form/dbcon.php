<?php
 
 $con= mysqli_connect('localhost','root');

 if ($con) {
 	echo "connection sucesseful";
 }else
 {
 	echo "not connected";
 }
mysqli_select_db($con,'register');

						$username =$_POST['username'];
						$email = $_POST['email'];
						$address = $_POST['address'];
						$division = $_POST['division'];
						$district = $_POST['district'];
						$upozila = $_POST['upozila'];
						$language = $_POST['language'];
						$exam = $_POST['exam'];
						$versity = $_POST['versity'];
						$board = $_POST['board'];
						$result = $_POST['result'];
						$image = $_POST['image'];
						$file = $_POST['file'];
						$training = $_POST['training'];

$query="insert into registertable (username,email,address,division,district,upozila,language,exam,versity,board,result,image,file,training) values ('$username','$email','$address','$division','$district','$upozila','$language','$exam','$versity','$board','$result','$image','$file','$training')";
mysqli_query($con,$query);

header('location:index.php');

?>