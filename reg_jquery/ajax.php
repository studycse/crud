<?php
 include 'dbcon.php';
 
///district
if(isset($_POST['id'])){
	$id=$_POST['id'];

	$q="SELECT * FROM district_tab WHERE divi_id='$id'";
	$result=mysqli_query($connect,$q) ;
?>
<select name="district" id="district" >
<option value="" selected> select an option</option>
<?php
while ($row=mysqli_fetch_array($result)) {
	?>
	<option value="<?php echo $row['id'];?>"><?php echo $row['district_name'];?></option>
	<?php
}
?>
</select>
<?php
}

///upozila

if(isset($_POST['districtId'])){
	$id=$_POST['districtId'];

	$q="SELECT * FROM upozila_tab WHERE dis_id='$id'";
	$result=mysqli_query($connect,$q) ;
?>
<select name="upozila" id="upozila" >
<option value="" selected> select an option</option>
<?php
while ($row=mysqli_fetch_array($result)) {
	?>
	<option value="<?php echo $row['id'];?>"><?php echo $row['upozila_name'];?></option>
	<?php
}
?>
</select>
<?php
}
?>



?>