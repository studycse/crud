
<?php

include 'dbcon.php';



if (isset($_POST['update'])) {

$id=$_GET['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$division=$_POST['division'];
$district=$_POST['district'];
$upozila=$_POST['upozila'];
$language=$_POST['language'];
$sscversity=$_POST['sscversity'];
$sscboard=$_POST['sscboard'];
$sscresult=$_POST['sscresult'];
$hscversity=$_POST['hscversity'];
$hscboard=$_POST['hscboard'];
$hscresult=$_POST['hscresult'];
$gdversity=$_POST['gdversity'];
$gdboard=$_POST['gdboard'];
$gdresult=$_POST['gdresult'];
$msversity=$_POST['msversity'];
$msboard=$_POST['msboard'];
$msresult=$_POST['msresult'];
$file=$_FILES['file']['name'];
$image=$_FILES['image']['name'];

		
$updatequery= "UPDATE registertable2 SET id=$id ,username='$username' ,email='$email',address='$address',mobile='mobile',division='$division', district='$district', upozila='$upozila', language='$language', sscversity='$sscversity', sscboard='$sscboard', sscresult='$sscresult', hscversity='$hscversity', hscboard='$hscboard', hscresult='$hscresult', gdversity='$gdversity', gdboard='$gdboard', gdresult='$gdresult', msversity='$msversity', msboard='$msboard', msresult='$msresult', image='$image', file='$file' WHERE id=$id";

$query= mysqli_query($connect,$updatequery);
			
if($query==TRUE){
header('location:page.php');
}else{
echo "Error:" .$updatequery ."<br>" .$connect->error;

	}
}
if(isset($_GET['id'])){

$id=$_GET['id'];

$sql="SELECT * FROM registertable2 WHERE id=$id ";

$result=mysqli_query($connect,$sql);

if($row = mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){

$username=$row ['username'];
$email=$row ['email'];
$address=$row ['address'];
$mobile=$row ['mobile'];
$division=$row ['division'];
$district=$row ['district'];
$upozila=$row ['upozila'];
$language=$row ['language'];
$sscversity=$row ['sscversity'];
$sscboard=$row ['sscboard'];
$sscresult=$row ['sscresult'];
$hscversity=$row ['hscversity'];
$hscboard=$row ['hscboard'];
$hscresult=$row ['hscresult'];
$gdversity=$row ['gdversity'];
$gdboard=$row ['gdboard'];
$gdresult=$row ['gdresult'];
$msversity=$row ['msversity'];
$msboard=$row ['msboard'];
$msresult=$row ['msresult'];
$file=$row ['file'];
$image=$row ['image'];
$id=$row['id'];
}

}
}


?>

<?php
if (isset($_GET['ref_master_id'])) {
    $targetID = $_GET['ref_master_id'];
    //$det='DELETE FROM `training` WHERE ref_master_id ='.$targetID;
 //echo $targetID;
// exit;
    $delete="DELETE FROM training WHERE ref_master_id ='.$targetID" ;

     $query= mysqli_query($connect, $delete) or die(mysql_error($connect));

	 if (mysqli_query($connect, $sql))
  	  {
  $last_id = mysqli_insert_id($connect);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

 $training_name= $_POST['training_name'] ;
 $organization = $_POST['organization'] ;
 $details = $_POST['details'];


 $items = array();

 $size = count($training_name);

 for($i = 0 ; $i < $size ; $i++){
   $items[$i] = array(
   	 "ref_master_id" =>  $last_id ,
      "training_name"     => $training_name[$i], 
      "organization"    => $organization[$i], 
      "details"       => $details[$i]
   );
 }

$values = array();
foreach($items as $item){
	//print_r($item) ;
  $values[] = "('{$item['ref_master_id']}','{$item['training_name']}', '{$item['organization']}', '{$item['details']}')";

  $a=$item['ref_master_id'];
  $b=$item['training_name'];
  $c=$item['organization'];
  $d=$item['details'];

    $insert="INSERT INTO training (ref_master_id,training_name,organization,details) VALUES ('$a','$b','$c','$d')";

  $query= mysqli_query($connect, $insert) or die(mysql_error($connect));



}
   
}



?>






<html>
<head>
<title> Registration Form</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
</head>
 
<body>
<h3> REGISTRATION FORM</h3>


<div class="regform">
<form action="" method="post" enctype="multipart/form-data">


 
<table class="table1" align="center" cellpadding = "15">




 
<!----- First Name ---------------------------------------------------------->
<tr>
<td for="username"> NAME</td>
<td><input type="text" name="username" id="username" maxlength="30" value="<?php echo $username; ?>"/>
	<?php
	if (isset($error_msg['username'])) {
		echo "<div class='error'>" .$error_msg['username']."</div>";
	}

	?>
</td>
</tr>
 

 <!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" id="email" maxlength="100" value="<?php echo $email; ?>" /><?php
	if (isset($error_msg['email'])) {
		echo "<div class='error'>" .$error_msg['email']."</div>";
	}

	?></td>
</tr>


<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" id="address" rows="4" cols="30" value="<?php echo $address; ?>"></textarea>
<?php
	if (isset($error_msg['address'])) {
		echo "<div class='error'>" .$error_msg['address']."</div>";
	}

	?></td>
</tr>


<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobile" id="mobile" maxlength="10" value="<?php echo $mobile; ?>"/>
<?php
	if (isset($error_msg['mobile'])) {
		echo "<div class='error'>" .$error_msg['mobile']."</div>";
	}

	?>
</td>
</tr>

 

<!----- Division -------------------------------------------------------->
<tr>
<td>Dvision:</td>
<td><select name="division" id="division" value="<?php echo $division; ?>">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="Comilla">Comilla</option>
<option value="Barishal">Barishal</option>
</select>
<?php
	if (isset($error_msg['division'])) {
		echo "<div class='error'>" .$error_msg['division']."</div>";
	}

	?></td>
</tr>

<!----- District -------------------------------------------------------->
<tr>
<td>District:</td>
<td><select name="district" id="district" value="<?php echo $district; ?>">
<option value="0" selected> select an option</option>
<option value="Tangail">Tangail</option>
<option value="Narayanganj">Narayanganj</option>
<option value="Narsingdi">Narsingdi</option>
</select>
<?php
	if (isset($error_msg['district'])) {
		echo "<div class='error'>" .$error_msg['district']."</div>";
	}

	?>
</td>
</tr>
 
<!----- Upozila -------------------------------------------------------->
<tr>
<td>Upozila:</td>
<td><select name="upozila" id="upozila" value="<?php echo $upozila; ?>" >
<option value="0" selected> select an option</option>
<option value="Donia">Donia</option>
<option value="Dhanmondi">Dhanmondi</option>
<option value="Sonir">Sonir</option>
</select>

<?php
	if (isset($error_msg['upozila'])) {
		echo "<div class='error'>" .$error_msg['upozila']."</div>";
	}

	?>
</td>
</tr>

 

 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>LANGUAGE </td>
 
<td>
English
<input type="checkbox" name="language" id="language"> <?php if(isset($language) && $language='y') echo 'checked="checked"'; ?>  
Bangla
<input type="checkbox" name="language" id="language"> <?php if(isset($language) && $language='y') echo 'checked="checked"'; ?> 
<?php
	if (isset($error_msg['language'])) {
		echo "<div class='error'>" .$error_msg['language']."</div>";
	}

	?>
</td>
</tr>
 

<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br/></td>
 
<td>

<table class="table1">
 
<tr>

<td align="center"><b>Examination</b></td>
<td align="center"><b>University</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Result</b></td>
</tr>
 
<tr>

<td align="center">SSC</td>
<td><select name="sscversity" id="sscversity" value="<?php echo $sscversity; ?>">
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="sscboard" id="sscboard" value="<?php echo $sscboard; ?>">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="sscresult" id="sscresult" value="<?php echo $sscresult; ?>">
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">HSC</td>
<td><select name="hscversity" id="hscversity" value="<?php echo $hscversity; ?>" >
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="hscboard" id="hscboard" value="<?php echo $hscboard; ?>">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="hscresult" id="hscresult" value="<?php echo $hscresult; ?>">
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Graduation</td>
<td><select name="gdversity" id="gdversity" value="<?php echo $gdversity; ?>">
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="gdboard" id="gdboard" value="<?php echo $dboard; ?>">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="gdresult" id="gdresult" value="<?php echo $gdresult; ?>">
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Masters</td>
<td><select name="msversity" id="msversity" value="<?php echo $msversity; ?>" >
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="msboard" id="msboard" value="<?php echo $msboard; ?>">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="Comilla">Comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="msresult" id="msresult" value="<?php echo $msresult; ?>" >
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 

</table>
 
</td>
</tr>
 
<!----- IMAGE ---------------------------------------------------------->

<tr>
<td>PHOTO:</td>
<td><input type="file" name="image" id="image" value="<?php echo $image; ?>" width="23" height="23"></td>
</tr>


<!----- Cv ---------------------------------------------------------->
<tr>
<td>CV:</td>
<td><input type="file" name="file" id="file" value="<?php echo $file; ?>"></td>
</tr>

 
<!----- Training ---------------------------------------------------------->
<tr>
<td>TRAINING <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table class="table1">
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Training Name</b></td>
<td align="center"><b>Organization</b></td>
<td align="center"><b>Details</b></td>
</tr>
 
<tr>
<td align="center">1</td>
<td><input type="text" name="training_name[]" id="training_name" maxlength="30" /></td>
<td><input type="text" name="organization[]" id="organization" maxlength="30" /></td>
<td><input type="text" name="details[]" id="details" maxlength="30" /></td>
</tr>

<tr>
<td align="center">2</td>
<td><input type="text" name="training_name[]" id="training_name" maxlength="30" /></td>
<td><input type="text" name="organization[]" id="organization"  maxlength="30" /></td>
<td><input type="text" name="details[]" id="details" maxlength="30" /></td>
</tr>
 
<tr>
<td align="center">3</td>
<td><input type="text" name="training_name[]" id="training_name" maxlength="30" /></td>
<td><input type="text" name="organization[]" id="organization" maxlength="30" /></td>
<td><input type="text" name="details[]" id="details" maxlength="30" /></td>
</tr>


</table>
 
</td>
</tr>

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<button type="submit" name="update" class="btn btn-primary">update</button>

</td>
</tr>
</table>
 
</form>
</div>

 
</body>
</html>