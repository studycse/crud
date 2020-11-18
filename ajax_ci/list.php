<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>List Page</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/bootstrap.js' ?>">
	<script src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js' ?>"></script>
	
</head>
<body>
<div class="container">
<div class="col-lg-12">

<br><br><h1 class="text-center text-primary">Display Table</h1>
<!-- <h3> Update FORM</h3>
<div class="regform">
<form action="">  -->


<!-- <table class="table1" align="center" cellpadding = "15"> -->
 
<!----- First Name ---------------------------------------------------------->
<!-- <tr>
<td > NAME</td>
<td><input type="text" name="id" value="" id="id" />
</td>
</tr>

<td > NAME</td>
<td><input type="text" name="name" value="" id="id" />
</td>
</tr>

<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" id="address"  rows="4" cols="30"></textarea>
</td>
</tr>

<tr>
<td colspan="2" align="center">

<button type="submit" name="update" value="update" id="btn_update" class="btn btn-primary">update</button>
</td>
</tr>
</table>
</form>
</div> -->

<!-- Add Button Link-->
<?php echo anchor('welcome/index','Add New',['class' => 'btn btn-primary']);  ?>
<hr>
<!-- ------------------------------ -->
<div class="form-group">
    <div class="input-group">
     <span class="text">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control test" />
    </div>
   </div>
<!-- -------------------------------- -->
<br>
<div id="result">
	<table  class="table table-striped table-hover text-center  " id="table_list">

	<tr class="text-white bg-dark">

					<th>ID</th>

					<th>Username</th>

					<th>Email ID</th>

					<th>Division</th>

					<th>District</th>

					<th>Upozila</th>

					<th>Delete</th>
					
					<th>Update</th>
					
					<th>Detail</th>

				</tr>

				<?php if(count($post)): ?>
				<?php foreach($post as $column): ?>
	                <tr>
					<td><?php echo $column->id ?></td>
					<td><?php echo $column->username ?></td>
					<td><?php echo $column->email ?></td>
					<td><?php echo $column->division_name ?></td>
					<td><?php echo $column->district_name ?></td>
					<td><?php echo $column->upozila_name ?></std>
			
					<td><?php echo anchor("welcome/update/$column->id",'Update',['class' => 'btn-primary btn']);  ?></td>
					<td><?php echo anchor("welcome/detail/$column->id",'Detail',['class' => 'btn-success btn']);  ?></td>
					<td><?php echo anchor("welcome/delete/$column->id",'Delete',['class' => 'btn-danger btn']);  ?></td>
					
				</tr>
				<?php endforeach; ?>

				<?php else: ?>
					<tr>
						<td>No records found!</td>
					</tr>
				<?php endif; ?>	

				
			</table>
			<?php echo $this->pagination->create_links();  ?>
			
			</div>
			</div>
			</div> 

</body>
<script type="text/javascript">

$(document).ready(function(){

 // load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>welcome/search",
   method:"POST",
   type:'html',
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }

 });

//update button-----------

// $(document).on('click','.update',function(){

// 	 var id =$(this).attr("id");
	
// 	$.ajax({
// 		url:"<?php echo base_url();?>welcome/ajax_update",
// 		method:"POST",
// 		data:{id:id},
// 		dataType:"html",
// 		success:function(data){
			
// 			console.log(data);
// 				// $('#result').hide();
// 			   // $('#id').val(data);
// 			 //   $('#address').val(data);
// 		}

// 	});
	
// });

// ajax search






});

</script>
</html>