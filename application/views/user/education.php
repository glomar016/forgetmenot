

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()?>resources/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>resources/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>resources/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>resources/css/theme.css" rel="stylesheet" media="all">

    <!-- Fontfaces CSS-->
    <!-- <link href="<?php echo base_url()?>resources/css/font-awesome.min.css" rel="stylesheet" media="all"> -->

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>resources/css/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>resources/css/main.css" rel="stylesheet" media="all">

    <!-- Jquery-->
    <script src="<?php echo base_url()?>resources/js/jquery-3.5.1.min.js"></script>

    <!-- Date Time JS-->
    <!-- <script src="<?php echo base_url()?>resources/js/datetime.js"></script> -->

    <!-- Moment w locales JS-->
    <script src="<?php echo base_url()?>resources/js/moment.js"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url()?>resources/js/sweetalert2@10.js"></script>


</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view('includes/header_mobile.php'); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view('includes/adminsidebar.php'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view('includes/header_desktop.php'); ?>
            <!-- HEADER DESKTOP-->
        <!-- MAIN CONTENT-->
          <div class='main-content'>
              <div class="section__content section__content--p30">
                <div class="container-fluid">
                    
                    <div class="card-hover-shadow-2x mb-3 card">
                        <div class="d-flex justify-content-between card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="fa fa-tasks"></i>&nbsp;Task Lists   
                            </div>
                            <div class="col-auto">
                                <button  type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addTaskModal">   
                                    <i style=padding:3px; class="fa fa-plus"></i> 
                                    Add task 
                                </button>  
                            </div>
                        </div>
                        <div class="scroll-area-sm">
                            <perfect-scrollbar class="ps-show-limits">
                                <div style="position: static;" class="ps ps--active-y">
                                    <div class="ps-content">
                                        <ul class=" list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-primary"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox3" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label></div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">Test Task 5</div>
                                                            <div class="widget-subheading">By Raven</div>
                                                        </div>
                                                        <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success"> <i class="fa fa-check"></i></button> <button class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-primary"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox10" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox10">&nbsp;</label></div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">Client Meeting at 11 AM</div>
                                                            <div class="widget-subheading">By Raven</div>
                                                        </div>
                                                        <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success"> <i class="fa fa-check"></i></button> <button class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </perfect-scrollbar>
                        </div>
                    </div>
                </div>
            </div>
          </div> 

        <!-- END MAIN CONTENT-->

        
            <!-- Add Task MODAL -->
            <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style=background-color:#46d4e0;>
                                    <h4 class="modal-title" id="largeModalLabel" style=color:white;><strong>Add Task</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                        </div>
                        <div class="card">   
                                <div class="card-body card-block">
                                    <form action="" method="post" name="addTaskForm" id="addTaskForm">
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-trophy"></i>
                                                    <label for="electionName" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <input type="text" id="taskName" name="taskName" placeholder="Title" maxlength="50" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-group"></i>
                                                    <label for="taskCategory" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <select name="taskCategory" id="taskCategory" class="form-control">
                                                        <option value="Education" selected>Education</option>
                                                        <option value="Personal">Personal</option>
                                                        <option value="Work">Work</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-comment"></i>
                                                    <label for="taskDescription" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <textarea name="taskDescription" id="taskDescription" rows="4" placeholder="Description" class="form-control" maxlength="200"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-calendar"></i>
                                                    <label for="electionDateEnd" class=" form-control-label">Due Date</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <input type="date" 
                                                    value="<?php echo date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d'))))?>" 
                                                    min="<?php echo date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d'))))?>"
                                                    id="electionDateEnd" name="electionDateEnd" class="form-control">
                                                </div>
                                            </div>
                                            <div style= float:right;>
                                                <input type="submit" value="Add" id="btnAddTask" class="btn btn-primary"> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END election MODAL -->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <!-- Task JS-->
    <!-- <script src="<?php echo base_url()?>resources/js/jquery.min.js"></script> -->
    <!-- Task JS-->
    <script src="<?php echo base_url()?>resources/js/bootstrap.bundle.min.js"></script>
    

    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>resources/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()?>resources/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()?>resources/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()?>resources/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()?>resources/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()?>resources/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>resources/js/main.js"></script>

</body>

<script>
    // start of script
$(document).ready(function(){
// Create task
$('#addTaskForm').on('submit', function(e){
        
        e.preventDefault();
        $("#btnAddTask").attr("disabled", true);

        var taskName = document.addTaskForm.taskName.value;
        var taskCategory = document.addTaskForm.taskCategory.value;
        var taskDescription = document.addTaskForm.taskDescription.value;
        var taskDueDate = document.addTaskForm.taskDueDate.value;

        var taskDueDate = new Date(taskDueDate);

                if(taskName == '' || taskCategory == '' || taskDueDate == ''){
                                    Swal.fire({
                                            title: 'Warning!',
                                            text: 'Please fill out required field.',
                                            icon: 'warning',
                                            confirmButtonText: 'Ok'
                                            }).then((result) => {
                                                $("#btnAddTask").attr("disabled", false);
                                            })
                }
                else{
                    // ajax call
                        var form = $('#addTaskForm');                                
                        // ajax post
                        $.ajax({
                            url: '<?php echo base_url()?>user/task/add_task',
                            type: 'post',
                            data: form.serialize(),

                            success:function()
                                    {
                                    
                                    refresh();
                                
                                    Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully created a election.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        }).then((result) => {
                                                $("#btnCreate").attr("disabled", false);
                                                $('#electionModal').modal('hide');
                                                $('#electionModal form')[0].reset();
                                            })

                                    }
                        });
                        // end of ajax call
                }       
    });
    // END OF // Create election
});
// end of script

</script>

</html>
<!-- end document-->
