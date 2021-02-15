<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('includes/header.php'); ?>


<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1">ForgetMe<b>Not</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in here</p>

      <form id="loginForm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control"  id="userEmail" name="userEmail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <input type="submit" id="btn_login" value="Login" class="btn btn-success btn-block"></input>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">

      </div>


      <!-- <p class="mb-0">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <p class="mb-0 text-right">
        <a href="<?php echo base_url()?>user/register">Don't have an account yet?</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->



</body>

<?php $this->load->view('includes/script.php'); ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script>
$('#loginForm').on('submit', function(e){
    e.preventDefault();
    $("#btn_login").val("Logging in...").attr("disabled", true);

    var userEmail = $('#userEmail').val();
    var userPassword = $('#userPassword').val();

    if (userEmail == "" || userPassword == ""){
      $("#btn_login").notify("Fill out required fields!");
      $("#btn_login").val("Submit").attr("disabled", false);
      $('#loginForm')[0].reset();
    }
    else{
      var form = $('#loginForm');                                
        // ajax post
        $.ajax({
            url: '<?php echo base_url()?>user/login/submit',
            type: 'post',
            data: form.serialize(),

                success: function(data){
                        var data = jQuery.parseJSON(data)
                        if(data.result == 'Error'){
                                    $("#btn_login").notify("Incorrect Password or Email!", { position:"right" });
                                    $("#btn_login").val("Submit").attr("disabled", false);
                                    $('#loginForm')[0].reset();
                        }
                        else if(data.result == 'Success'){
                            window.location.href = "<?php echo base_url()?>user/home";
                        }
                    
                    }
                // End of success function
        })
        // End of ajax post
    }

    
})


</script>


</html>