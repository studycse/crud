<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  

</head>
<body>

	<div class="container">
		<h1 class="text-primary text-uppercase text-center"> SAMIA CRUDE OPERATION </h1>

		<div class="d-flex justify-content-end">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> OPEN FORM
</button>
		</div>
		<h2 class="text-primary">RECORDS</h2>
		<div id="records-contant" ></div>
		
		<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">REGISTRATION FORM</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        	<label>First Name:</label>
        	<input type="text" name="" id="firstname" class="form-control" placeholder="First Name">
        	</div>

        	<div class="form-group">
        	<label>Last Name:</label>
        	<input type="text" name="" id="lastname" class="form-control" placeholder="Last Name">
        	</div>

        	<div class="form-group">
        	<label>Email Id:</label>
        	<input type="text" name="" id="emailid" class="form-control" placeholder="Email Id">
        	</div>

        	<div class="form-group">
        	<label>Mobile Number:</label>
        	<input type="text" name="" id="mobilenumber" class="form-control" placeholder="Mobile Number">
        	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">SAVE</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">

    $(document).ready(function)(){

      readRecords();
    };

    function readRecords() {

      var readrecord ="readrecord";
       $.ajax({

        url:"backend.php",
        type:"post",
        data:{readrecord:readrecord   }
        success:function(data,status){
          $('#records-contant').html(data);
            }


       });

    }


  	function addRecord(){
  		var firstname =$('#firstname').val();
  		var lastname =$('#lastname').val();
  		var emailid =$('#emailid').val();
  		var mobilenumber =$('#mobilenumber').val();

  		$.ajax({

  			url:"backend.php",
  			type:'post',
  			data: {firstname:firstname,lastname:lastname,mobilenumber:mobilenumber,emailid:emailid},

  			success:function(data,status){

  				readRecords();

  			},
  		});
    }

      function Deleteuser(deleteid){
        var conf = confrim("Are you sure");
        if (conf==true) {
          $.ajax({
            url:"backend.php",
            type:"post",
            data:{deleteid:deleteid},
            success: function(data,status){
               readRecords();
            }


          });
        }
      }
  	
  </script>
</body>
</html>