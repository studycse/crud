<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

 $con= mysqli_connect('localhost','root');

 if ($con) {
 	echo "connection sucesseful";
 }else
 {
 	echo "not connected";
 }
mysqli_select_db($con,'register');


	if(isset($_POST['submit'])){

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


	
?>


	<dl>
		<dt>Name:</dt><dd><?php echo $_POST["username"] ?></dd>
		<dt>Email:</dt><dd><?php echo $_POST["email"] ?></dd>
		<dt>Address:</dt><dd><?php echo $_POST["address"] ?></dd>
		<dt>Division:</dt><dd><?php echo $_POST["division"] ?></dd>
		<dt>District:</dt><dd><?php echo $_POST["district"] ?></dd>
		<dt>Upozila:</dt><dd><?php echo $_POST["upozila"] ?></dd>
		<dt>English:</dt><dd><?php echo $_POST["language"] ?></dd>
		<dt>Exam:</dt><dd><?php echo $_POST["exam"] ?></dd>
		<dt>Versity:</dt><dd><?php echo $_POST["versity"] ?></dd>
		<dt>Board:</dt><dd><?php echo $_POST["board"] ?></dd>
		<dt>Result:</dt><dd><?php echo $_POST["result"] ?></dd>
		<dt>Image:</dt><dd><?php echo $_POST["image"] ?></dd>
		<dt>File:</dt><dd><?php echo $_POST["file"] ?></dd>
		<dt>Yes:</dt><dd><?php echo $_POST["training"] ?></dd>
		
	
		</dl>

		<?php

	} 

	?>


</body>
</html>