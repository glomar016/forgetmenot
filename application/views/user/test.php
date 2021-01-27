<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('includes/header.php'); ?>


<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- NAVBAR -->
        <?php $this->load->view('includes/navbar.php'); ?>
        <!-- END NAVBAR-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view('includes/sidebar.php'); ?>
        <!-- END MENU SIDEBAR-->



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container mt-5">
                    <div class="row">
                        <div id="signupIconMain" class="col-2 col-lg-1 text-center"
                            style="margin-top:auto; margin-bottom:auto; height:50%;">
                            <i class="nav-icon fas fa-home" style="font-size:35px;"></i>
                        </div>
                        <div class="col-10 col-lg-11">
                            <h1 id="signupTitle" class="m-0 text-dark text-bold">Home</h1>
                            <span id="signupDesc">Welcome, manage all your tasks here!</span>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content mt-5">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="card ml-lg-5 mr-lg-5 mb-0">
                            
                        </div>
                    </div>
                </div>
            </section>
        <!-- /.content -->
        </div>
    </div>




</body>

<?php $this->load->view('includes/script.php'); ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</html>