
<?php
 include 'dbcon.php';
 include 'sql.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

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
<form action="page.php" method="post" id="registration"  enctype="multipart/form-data">


 
<table class="table1" align="center" cellpadding = "15">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td for="username"> NAME</td>
<td><input type="text" name="username" id="username" />
	
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
<td><input type="text" name="email" id="email" />
	<h5 id="emailcheck"></h5>
	<?php
	if (isset($error_msg['email'])) {
		echo "<div class='error'>" .$error_msg['email']."</div>";
	}

	?>
	
</td>
</tr>


<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" id="address" rows="4" cols="30"></textarea>
	
<?php
	if (isset($error_msg['address'])) {
		echo "<div class='error'>" .$error_msg['address']."</div>";
	}

	?>
	
</td>
</tr>


<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobile" id="mobile"  />

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
<option value="" selected> select an option</option>

<?php
include 'dbcon.php';

$q= "SELECT * FROM division_tab ";
$result=mysqli_query($connect,$q) ;
while ($row= mysqli_fetch_array($result)) {
	?>
	<option value="<?php echo $row['id'];?>"><?php echo $row['division_name'];?></option>
		<?php
}

?>

</select>
<?php
	if (isset($error_msg['division'])) {
		echo "<div class='error'>" .$error_msg['division']."</div>";
	}

	?>
	
</td>
</tr>

<!----- District -------------------------------------------------------->
<tr>
<td>District:</td>
<td><select name="district" id="district"  >
<option value="" selected> select an option</option>
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
<td><select name="upozila" id="upozila"  >
<option value="" selected> select an option</option>
</select>

<?php
	if (isset($error_msg['upozila'])) {
		echo "<div class='error'>" .$error_msg['upozila']."</div>";
	}

	?>
	<h5 id="upocheck"></h5>
</td>
</tr>

 

 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>LANGUAGE </td>
 
<td class="language">
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
<td><input type="file" name="image_1" id="image" value="" width="23" height="23"></td>
</tr>


<!----- Cv ---------------------------------------------------------->
<tr>
<td>CV:</td>
<td><input type="file" name="file_1" id="file"></td>
</tr>

 
<!----- Training ---------------------------------------------------------->
<tr>
<td>TRAINING <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table class="table1" id="traing_field">
 
<tr>

<td align="center"><b>Training Name</b></td>
<td align="center"><b>Organization</b></td>
<td align="center"><b>Details</b></td>
</tr>
 
<tr>

<td><input  type="text" name="training_name[]" id="training_name" /></td>
<td><input  type="text" name="organization[]" id="organization" /></td>
<td><input  type="text" name="details[]" id="details" /></td>
<td><input class="btn-success btn" type="button" name="add" id="add" value="Add" /></td>
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


<script type="text/javascript">

$(document).ready(function(){



 var html ='<tr><td><input type="text" name="training_name[]" required="" ></td><td><input  type="text" name="organization[]" required=""></td><td><input  type="text" name="details[]" required="" /></td><td><input class="btn-danger btn" type="button" name="remove" id="remove" value="remove" /></td></tr>';	

 var x=1;

 $("#add").click(function(){
	$('#traing_field').append(html);
});

 $("#traing_field").on('click','#remove', function(){
 	$(this).closest('tr').remove();

 });

///  division
$("#division").on('change',function(){

var divisionId=$(this).val();
$.ajax({
	url:"ajax.php",
	method:"POST",
	data:{id:divisionId},
	dataType:"html",
	success:function(data){
		$("#district").html(data);
	}

});

});

///  upozila
$("#district").on('change',function(){

var districtId=$(this).val();
$.ajax({
	url:"ajax.php",
	method:"POST",
	data:{districtId:districtId},
	dataType:"html",
	success:function(data){
		$("#upozila").html(data);
	}

});

});







});


</script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>

<script src="register.js"></script>

</body>
</html>