<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CUSTOMER SYSTEM BISMAR GAZALI</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/simple-sidebar/css/simple-sidebar.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/style.css">
  <script src="<?php echo base_url()?>assets/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/web_admin/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
   
</head>
<body>

<div class="container">
   <div class="col-md-5" style="border-right: 1px solid #afafafb5;">

	<h3>Create Customer</h3>
	<p id="message"></p>

    <form>        
        <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="input_nama" placeholder="Nama">
               <input type="hidden" class="form-control" id="idlist" name="input_nama" >
              
        </div>
        <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="email" name="input_email" placeholder="Email">
        </div>
        <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" id="password" name="input_password" placeholder="Password">
        </div>
        <div class="form-group">
            <label>Gender</label>
                <select id="gender" name="input_gender" class="form-control">
                    <option id="" selected disabled></option>
                    <option id="M">Male</option>
                    <option id="F">Female</option>
                 </select>
        </div>
        <div class="form-group">
            <label>Is Married</label>
                <select id="married" name="input_married" class="form-control">
                    <option id="" selected disabled></option>
                    <option id="Y">Yes</option>
                    <option id="N">No</option>
                    </select>
        </div>
        <div class="form-group">
            <label>Address</label>
                <textarea class="form-control" id="address" name="input_address" placeholder="Address"></textarea>
        </div>
        <div>
           <button type="button" id="btnsavex" class="btn btn-success create_save" idstatus="Save">Save</button>
           <button type="button" id="btnsavex" class="btn btn-danger clear">Clear</button>
        </div>
    </form>
</div>

    <div id="" class="col-md-7">
     	<div id="view" style="margin: 50px 0px;">
        <?php $this->load->view('list_customer', array('model'=>$model)); ?>
    	</div>
    </div>  
   
  <script>
  	$(document).ready(function () {
       loadforms();
    });

  	function loadforms() {

        $('#name').val('');
        $('#email').val('');
        $('#password').val('');
        $('#gender').val('');
        $('#married').val('');
        $('#address').val('');
    }

    $(document).on('click','.clear', function () {
        loadforms();
    });

    $(document).on('click','.create_save', function () {
    	var name = $('#name').val();
    	var filter_gender = $('#gender option:selected').attr('id');
    	var filter_married = $('#married option:selected').attr('id');
    	var email = $('#email').val();
    	var password = $('#password').val();
    	var address = $('#address').val();
    	var errorsx = '<div class="alert alert-danger">Error save data!</div>';
    	var successx = '<div class="alert alert-success">Success save data!</div>';

    	if(name!='' && name!=null
            && filter_gender!='' && filter_gender!=null
            && filter_married!='' && filter_married!=null
            && password!='' && password!=null
            && email!='' && email!=null
            && address!='' && address!=null
            )
    	{

        $.ajax({
			method: "POST",
			url: "<?php echo base_url(); ?>Customer/cust",	
			dataType: 'JSON',
			data: {
				name : name,
		        filter_gender : filter_gender,
		        filter_married : filter_married,
		        email : email,
		        password : password,
		        address : address
			},
					
				success: function(data) {
						$("#datax").load(location.href + " #datax");
						$("#message").html(successx);
						$("#message").show().fadeOut(3000);
						loadforms();
					}
			});

        } else {
            $("#datax").load(location.href + " #datax");
			$("#message").html(errorsx);
			$("#message").show().fadeOut(8000);
        }
     });


    $(document).on('click','.btnformubah', function () {

    	var id_filetype = $(this).attr('data-id');

    	$.ajax({
			method: "POST",
			url: "<?php echo base_url(); ?>Customer/get_edit",	
			dataType: 'JSON',
			data: {
				id_filetype : id_filetype
			},

			success: function(resultJson) {
				var response = resultJson;

					$('#idlist').val(response[0]['ID']);
				    $('#name').val(response[0]['Name']);
				    $('#email').val(response[0]['Email']);
				    $('#gender').val(response[0]['Gender']);
				    $('#married').val(response[0]['Is_married']);
				    $('#address').val(response[0]['Address']);
				    $('#btnsavex').removeClass('create_save');
				    $('#btnsavex').addClass('edit_save');
				}
			});
    	
    });	

   
    $(document).on('click','.edit_save',function () {
    	var id_data  = $('#idlist').val();
    	var name = $('#name').val();
    	var filter_gender = $('#gender option:selected').attr('id');
    	var filter_married = $('#married option:selected').attr('id');
    	var email = $('#email').val();
    	var password = $('#password').val();
    	var address = $('#address').val();
    	var errorsx = '<div class="alert alert-danger">Error save update data!</div>';
    	var successx = '<div class="alert alert-success">Success save update data!</div>';

    	if(name!='' && name!=null
            && filter_gender!='' && filter_gender!=null
            && filter_married!='' && filter_married!=null
            && password!='' && password!=null
            && email!='' && email!=null
            && address!='' && address!=null
            )
    	{

        $.ajax({
			method: "POST",
			url: "<?php echo base_url(); ?>Customer/saveedit",	
			dataType: 'JSON',
			data: {
				name : name,
				id_data : id_data,
		        filter_gender : filter_gender,
		        filter_married : filter_married,
		        email : email,
		        password : password,
		        address : address
			},
					
				success: function(data) {
						$("#datax").load(location.href + " #datax");
						$("#message").html(successx);
						$("#message").show().fadeOut(8000);
						loadforms();
					}
			});

        } else {
            $("#datax").load(location.href + " #datax");
			$("#message").html(errorsx);
			$("#message").show().fadeOut(8000);
        }
    });

    $(document).on('click','.btnhapus',function () {
        if (window.confirm('Are you sure to delete data ?')) {

            var id_filetype = $(this).attr('data-id');
            var successx = '<div class="alert alert-success">Success delete data!</div>';

         $.ajax({
			method: "POST",
			url: "<?php echo base_url(); ?>Customer/get_delete",	
			dataType: 'JSON',
			data: {
		        id_filetype : id_filetype
			},
					
			success: function(data) {
					$("#datax").load(location.href + " #datax");
					$("#message").html(successx);
					$("#message").show().fadeOut(8000);
					loadforms();

				}
			});
        }
    });

  </script>

</div>

</body>
</html>

