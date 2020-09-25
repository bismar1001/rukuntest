
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/lib/';?>bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/lib/';?>font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/lib/';?>Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/';?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/';?>plugins/iCheck/square/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url().'assets/dashboard/lib/';?>jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url().'assets/dashboard/lib/';?>bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url().'assets/dashboard/';?>plugins/iCheck/icheck.min.js"></script>
</head>

<body class="hold-transition login-page" style="background-image: url(<?php echo base_url().'assets/bg.jpg';?>); background-size: 200px;">
  <div class="login-box" style="box-shadow: 2px 2px 10px #000000;">
    <div class="login-logo"> 
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color: #fff;"> 
  <div align="center"><img src="<?php echo base_url().'assets/a2.png';?>" style="max-width: 200px; padding: 20px;">
  </div>
  <p id="message"></p>
  <form id="my-form">
      <div class="form-group has-feedback">
        <input type="text" id="username" class="form-control" placeholder="username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <input type="checkbox" name="remember" id="remember">  Remember Me
            </label>
          </div>
        </div>

        <div class="col-xs-4">
          <button type="button" id="btnsavex" class="btn btn-success submitauth btn-block btn-flat" idstatus="Save">Login</button>
        </div>
      </div>
    </form>  
  </div>
</div>

<script>
    $(document).ready(function () {
       loadforms();
    });

    function loadforms() {
       $('#password').val('');
       $('#username').val('');
    }

    $(document).on('click','.submitauth', function () {
      var username = $('#username').val();
      var password = $('#password').val();
      var errorsx = '<div class="alert alert-danger">Error save data!</div>';
      var successx = '<div class="alert alert-success">Success save data!</div>';
      var notnull = '<div class="alert alert-danger">Username or Password Anda Salah!</div>';

      if(username!='' && username!=null
            && password!='' && password!=null
          )
      {

        $.ajax({
          method: "POST",
          url: "<?php echo base_url(); ?>Auth/log",  
          dataType: 'JSON',
          data: {
              username : username,
              password : password
          },
            
          success: function(datax) {
            var response = datax;
            
            if(response==1 || response=='1') { 
                //alert('OKE');
                 window.location.href = "<?php echo base_url('Customer'); ?>";
            }
            else {
              $("#message").html(notnull);
              $("#message").show().fadeOut(3000);

            }


              // $("#datax").load(location.href + " #datax");
              // $("#message").html(successx);
              // $("#message").show().fadeOut(3000);
              //loadforms();
            }
        });

      } 
      else {
            //$("#datax").load(location.href + " #datax");
            $("#message").html(notnull);
            $("#message").show().fadeOut(8000);
        }
     });
  </script>
<!-- -------------------- -->

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  }); 
  $(document).ready(function(){ 
        $('#btn-login').on('click',function(){
            var username=$('#username').val();
            var password=$('#password').val();
            var remember=$('#remember').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('api/login/log_post')?>",
                dataType : "JSON", 
                data : {username:username , password:password, remember:remember},
                success: function(data){
                    $('[name="username"]').val("");
                    $('[name="password"]').val("");
                    $('[name="remember"]').val("");
                    $('#my-form');            
                    location.reload(true);
                  } 
            });
            return false;
        }); 
 
    });
</script>
</body>
</html>
