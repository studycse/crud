<?php
include 'dbcon.php';

if (isset($_POST['submit'])) {
	
	$query="INSERT INTO registertable2 (username, email,address,mobile,division,district,upozila,language,sscversity,sscboard,sscresult,hscversity,hscboard,hscresult,gdversity,gdboard,gdresult,msversity,msboard,msresult,image,file) VALUES ('$_POST[username]','$_POST[email]','$_POST[address]','$_POST[mobile]','$_POST[division]','$_POST[district]','$_POST[upozila]','$_POST[language]','$_POST[sscversity]','$_POST[sscboard]','$_POST[sscresult]','$_POST[hscversity]','$_POST[hscboard]','$_POST[hscresult]','$_POST[gdversity]','$_POST[gdboard]','$_POST[gdresult]','$_POST[msversity]','$_POST[msboard]','$_POST[msresult]','$_POST[image]','$_POST[file]')";

	$result= mysqli_query($connect,$query);

	echo "1 record added";
}


?>

<?php

if(isset($_POST['submit'])){
if($_POST['username'] == ""){
	$error_msg['username']= " ** Name is required";
}
//only letter support korbe
$name =$_POST['username'];
if (!preg_match("/^[a-zA-Z -]*$/", $name)) {
	$error_msg['username']= " ** Only letters allowed";
}

//address
$address=$_POST['address'];
if (empty($address)) {
	$error_msg['address']= " ** Address is required";
}

//mobile
$mobile=$_POST['mobile'];
if (empty($mobile)) {
	$error_msg['mobile']= " ** Mobile number is required";
}
//only number allowed
else if(!is_numeric($mobile)){
$error_msg['mobile']= " ** only numeric value is required";
}
//only 11 value
else if ((strlen($mobile) !=12)) {
	$error_msg['mobile']= " ** Maximum 12 digit number";
}
//email
$email =$_POST['email'];
if(empty($_POST['email'])){
	$error_msg['email']= " ** Email is required";
}

//email valid

else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
	$error_msg['email']= " ** invalid email";
}


//division

$division =$_POST['division'];
if ($division =="0") {
	$error_msg['division']= " ** division is required";
}

//district
$district =$_POST['district'];
if ($district =="0") {
	$error_msg['district']= " ** district is required";
}

//upozila
$district =$_POST['upozila'];
if ($district =="0") {
	$error_msg['upozila']= " ** upozila is required";
}

//check box
if(empty($_POST['language'])){
	$error_msg['language']= " ** language is required";
}

//image
if($_FILES['image']['name']){
	if (($_FILES['image']['type']=="image/jpg") or ($_FILES['image']['type']=="image/png")){
	
	move_uploaded_file($_FILES['image']['tmp_name'],"upload/" .time() .rand() ."-" .$_FILES['image']['name']); //ak image bar bar uplaod hobe na
}else
{
	$error_msg['image']= " ** please upload image jpg or png format";
}


}else {
	$error_msg['image']= " ** Image is required";
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


 
<table align="center" cellpadding = "15">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td for="username"> NAME</td>
<td><input type="text" name="username" id="username" maxlength="30"/>
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
<td><input type="text" name="email" id="email" maxlength="100" /><?php
	if (isset($error_msg['email'])) {
		echo "<div class='error'>" .$error_msg['email']."</div>";
	}

	?></td>
</tr>


<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" id="address" rows="4" cols="30"></textarea>
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
<input type="text" name="mobile" id="mobile" maxlength="10" />
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
<td><select name="division" id="division" >
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
<td><select name="district" id="district" >
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
<td><select name="upozila" id="upozila" >
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

<table>
 
<tr>

<td align="center"><b>Examination</b></td>
<td align="center"><b>University</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Result</b></td>
</tr>
 
<tr>

<td align="center">SSC</td>
<td><select name="sscversity" id="sscversity" >
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="sscboard" id="sscboard" >
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="sscresult" id="sscresult" >
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">HSC</td>
<td><select name="hscversity" id="hscversity" >
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="hscboard" id="hscboard" >
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="hscresult" id="hscresult" >
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Graduation</td>
<td><select name="gdversity" id="gdversity" >
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="gdboard" id="gdboard" >
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="gdresult" id="gdresult" >
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Masters</td>
<td><select name="msversity" id="msversity" >
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="msboard" id="msboard">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="Comilla">Comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="msresult" id="msresult" >
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
<td><input type="file" name="image" id="image" value="" width="23" height="23"></td>
</tr>


<!----- Cv ---------------------------------------------------------->
<tr>
<td>CV:</td>
<td><input type="file" name="file" id="file"></td>
</tr>

 
<!----- Training ---------------------------------------------------------->
<tr>
<td>TRAINING <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Training Name</b></td>
<td align="center"><b>Organization</b></td>
<td align="center"><b>Details</b></td>
</tr>
 
<tr>
<td align="center">1</td>
<td><input type="text" name="training_name" maxlength="30" /></td>
<td><input type="text" name="training_org" maxlength="30" /></td>
<td><input type="text" name="training_detail" maxlength="30" /></td>
</tr>
 
<tr>
<td align="center">2</td>
<td><input type="text" name="training_name" maxlength="30" /></td>
<td><input type="text" name="training_org" maxlength="30" /></td>
<td><input type="text" name="training_detail" maxlength="30" /></td>
</tr>
 
<tr>
<td align="center">3</td>
<td><input type="text" name="training_name" maxlength="30" /></td>
<td><input type="text" name="training_org" maxlength="30" /></td>
<td><input type="text" name="training_detail" maxlength="30" /></td>
</tr>
 
</table>
 
</td>
</tr>
 
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<button type="submit" name="submit" class="btn btn-primary">submit</button>

</td>
</tr>
</table>
 
</form>
</div>

 
</body>
</html>