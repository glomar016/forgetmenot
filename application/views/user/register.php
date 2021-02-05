<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('includes/header.php'); ?>


<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="" class="h1">ForgetMe<b>Not</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Create Account here!</p>

      <form id="registerForm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="userName" name="userName" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email">
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
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="userPassword2" name="userPassword2" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <input type="submit" id="btn_register" value="Register" class="btn btn-success btn-block"></input>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        
      </div>

      <a href="<?php echo base_url()?>user/login" class="float-right">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->




</body>

<?php $this->load->view('includes/script.php'); ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script>
$('#registerForm').on('submit', function(e){
    e.preventDefault();
    $("#btn_register").val("Creating account...").attr("disabled", true);

    var userName = $('#userName').val();
    var userEmail = $('#userEmail').val();
    var userPassword = $('#userPassword').val();
    var userPassword2 = $('#userPassword2').val();

    if (userPassword != userPassword2){
        Swal.fire({
            title: 'Failed!',
            text: 'Password does not match!',
            icon: 'error',
            confirmButtonText: 'Ok'
            }).then((result) => {
                    $("#btn_register").val("Submit").attr("disabled", false);
                    $('#registerForm')[0].reset();
            })
            $("#btn_register").val("Submit").attr("disabled", false);
            $('#registerForm')[0].reset();
    }

    if (userPassword.length < 8){
        Swal.fire({
            title: 'Failed!',
            text: 'Password at least 8 characters!',
            icon: 'error',
            confirmButtonText: 'Ok'
            }).then((result) => {
                    $("#btn_register").val("Register").attr("disabled", false);
                    $('#registerForm')[0].reset();
            })
                    $("#btn_register").val("Register").attr("disabled", false);
                    $('#registerForm')[0].reset();
    }

    else if (userPassword == userPassword2){
        
        var form = $('#registerForm');                               
            // ajax post
            $.ajax({
                url: '<?php echo base_url()?>user/register/submit',
                type: 'post',
                data: form.serialize(),

                    success: function(data){
                        if(data == true){
                            Swal.fire({
                                title: 'Failed!',
                                text: 'Email already registered!',
                                icon: 'error',
                                confirmButtonText: 'Ok'
                                }).then((result) => {
                                        $("#btn_register").val("Register").attr("disabled", false);
                                        $('#registerForm')[0].reset();
                                })
                                        $("#btn_register").val("Register").attr("disabled", false);
                                        $('#registerForm')[0].reset();

                        }
                        else{
                            Swal.fire({
                                title: 'Success!',
                                text: 'Successfully Registered!',
                                icon: 'sucess',
                                confirmButtonText: 'Ok'
                                }).then((result) => {
                                        $("#btn_register").val("Register").attr("disabled", false);
                                        $('#registerForm')[0].reset();
                                        window.location.href = "<?php echo base_url()?>user/login";
                                })
                                    $("#btn_register").val("Register").attr("disabled", false);
                                    $('#registerForm')[0].reset();
                        }
                            
                        }
                    // End of success function
            })
            // End of ajax post
    }
    

    
})

</script>

</html>