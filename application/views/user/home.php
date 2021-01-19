

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
    
    <!-- Data Tables CSS-->
    <link href="<?php echo base_url()?>resources/css/jquery.dataTables.min.css" rel="stylesheet" media="all">

    <!-- Fontfaces CSS-->
    <!-- <link href="<?php echo base_url()?>resources/css/font-awesome.min.css" rel="stylesheet" media="all"> -->

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>resources/css/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>resources/css/main.css" rel="stylesheet" media="all">

    <!-- Jquery-->
    <script src="<?php echo base_url()?>resources/js/jquery-3.5.1.min.js"></script>

    <!-- Data Tables JS-->
    <script src="<?php echo base_url()?>resources/js/jquery.dataTables.min.js"></script>

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
        <!-- <?php $this->load->view('includes/adminsidebar.php'); ?> -->
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
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <!-- Data Table Content -->
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">

                                    <!-- DATA TABLE -->
                                    
                                    <div class="table-data__tool">
                                            <h4>Task List</h4>
                                        <div class="table-data__tool-right">
                                            <button  type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#addTaskModal">   
                                            <i style=padding:3px; class="fa fa-plus"></i> 
                                            Add Task </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-responsive-data2">
                                        <table id="taskTable" class="table table-data3" style="width:100%"> 
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Due Date</th>
                                                    <th>Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END DATA TABLE -->
                                    </div>  
                                </div>
                            </div>
                            <!-- End of Data Table Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div> 

            <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
        </div>
    </div>
     
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
                                            <label for="taskTitle" class=" form-control-label">Title</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="taskTitle" name="taskTitle" placeholder="Title" maxlength="50" class="form-control">
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
                                            <textarea name="taskDescription" id="taskDescription" rows="12" placeholder="Description" class="form-control" maxlength="2000"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="taskDueDate" class=" form-control-label">Due Date</label>
                                        </div>
                                        <?php date_default_timezone_set('Asia/Manila');
                                        $time = new DateTime(); ?>
                                        <div class="col-4 col-md-8">
                                            <input type="datetime-local" 
                                            value="<?php echo $time->format('Y-m-d\TH:i')?>"
                                            id="taskDueDate" name="taskDueDate" class="form-control">
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" id="btnAddTask" class="btn btn-sm btn-primary"> 
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END task MODAL -->

    <!-- EDIT Task MODAL -->
    <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style=background-color:#ffc107;>
                                <h4 class="modal-title" id="largeModalLabel" style=color:white;><strong>Edit Task</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                    </div>
                    <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" name="editTaskForm" id="editTaskForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="edittaskTitle" class=" form-control-label">Title</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" hidden>
                                            <input type="text" id="edittaskTitle" name="edittaskTitle" placeholder="Title" maxlength="50" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-group"></i>
                                            <label for="edittaskCategory" class=" form-control-label">Category</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="edittaskCategory" id="edittaskCategory" class="form-control">
                                                <option value="Education" selected>Education</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Work">Work</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="edittaskDescription" class=" form-control-label">Description</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="edittaskDescription" id="edittaskDescription" rows="12" placeholder="Description" class="form-control" maxlength="2000"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="edittaskDueDate" class=" form-control-label">Due Date</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="datetime-local" 
                                            value="<?php echo date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d'))))?>" 
                                            
                                            id="edittaskDueDate" name="edittaskDueDate" class="form-control">
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" id="btnUpdateTask" class="btn btn-sm btn-primary"> 
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END EDIT task MODAL -->


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

    function loadtable(){
        taskDataTable = $('#taskTable').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>user/home/view_task",
            "columns": [
                { data: "id"},
                { data: "taskTitle"},
                { data: "taskDueDate", render: function(data, type, row){
                    if(moment(data).format('MM DD YYYY, h:mm:ss') <= moment().subtract(1, 'days').format('MM DD YYYY, h:mm:ss')){
                        return moment(data).format('LLL')+' - '+'<span class="badge badge-warning">Due Soon</span>';
                    }
                    else if((moment(data).format('MM DD YYYY, h:mm:ss')) <= (moment().format('MM DD YYYY, h:mm:ss'))){
                        return moment(data).format('LLL')+' - '+'<span class="badge badge-danger">Over Due</span>';
                    }
                    else{
                        return moment(data).format('LLL');
                    }
                }, "orderData":[1]},
                { data: "taskCategory"},
                { data: "taskStatus", render: function(data, type, row){
                    if(data == 1){
                        return '<div class="btn-group">'+
                                '<button class="btn btn-primary btn-sm btn_view" value="'+row.id+'" title="View" type="button" alt="View"><i class="zmdi zmdi-eye"></i> </button>'+
                                '<button class="btn btn-warning btn-sm btn_update" value="'+row.id+'" title="Edit" type="button" alt="View"><i class="zmdi zmdi-edit"></i> </button>'+
                                '<button class="btn btn-danger btn-sm btn_delete" value="'+row.id+'" title="Delete" type="button" alt="Delete"> <i class="zmdi zmdi-delete"> </i></button></div>';
                    }   
                    else{
                        return '<button>Activate</button>';
                    }
                }}
            ],

            "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}],
            "order": [[0, "desc"]]
        })
    }

    
    
    function refresh(){
        var url = "<?php echo base_url()?>user/home/view_task";

        taskDataTable.ajax.url(url).load();
    }

    loadtable()
    

// Create task
    $('#addTaskForm').on('submit', function(e){
        
        e.preventDefault();
        $("#btnAddTask").attr("disabled", true);

        var taskTitle = document.addTaskForm.taskTitle.value;
        var taskCategory = document.addTaskForm.taskCategory.value;
        var taskDescription = document.addTaskForm.taskDescription.value;
        var taskDueDate = document.addTaskForm.taskDueDate.value;

        var taskDueDate = new Date(taskDueDate);

                if(taskDescription == '' || taskCategory == '' || taskDueDate == ''){
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
                            url: '<?php echo base_url()?>user/home/add_task',
                            type: 'post',
                            data: form.serialize(),

                            success:function()
                                    {
                                    $("#btnAddTask").attr("disabled", false);
                                    $('#addTaskModal').modal('hide');
                                    $('#addTaskModal form')[0].reset();
                                    refresh()
                                    }

                                    
                        });
                        // end of ajax call
                }       
    });
    // END OF // Create task

    // VIEW TASK 
    $(document).on("click", ".btn_update", function(){
        var id = this.value;
        

        $.ajax({
            url: '<?php echo base_url()?>user/home/get_task/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    console.log(row.taskDueDate)
                    $('[name="id"').val(row.id);
                    $('[name="edittaskTitle"]').val(row.taskTitle);
                    $('[name="edittaskCategory"]').val(row.taskCategory);
                    $('[name="edittaskDescription"]').val(row.taskDescription);
                    $('[name="edittaskDueDate"]')[0].valueAsNumber = (new Date(row.taskDueDate.slice(0, 10)).getTime(row.taskDueDate))
                    $('#editTaskModal').modal('show'); // show bootstrap modal when complete loaded
                }
        })
       
    });
    // END OF VIEW TASK

    // UPDATE TASK
    $('#editTaskForm').on('submit', function(e){
                        e.preventDefault();
                        $("#btnUpdateTask").attr("disabled", true);
                        
                        var id = document.editTaskForm.id.value

                        var editTaskTitle = document.editTaskForm.edittaskTitle.value;
                        var editTaskCategory = document.editTaskForm.edittaskCategory.value;
                        var editTaskDescription = document.editTaskForm.edittaskDescription.value;
                        var editTaskDueDate = document.editTaskForm.edittaskDueDate.value;

                        var form = ($(this).serialize());

                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, update it!'
                            }).then((result) => {
                            if (result.isConfirmed) {
                        // Ajax call
                            $.ajax({
                                url: '<?php echo base_url()?>user/home/update_task',
                                type: 'post',
                                data: form,

                                success:function()
                                        {
                                            $("#btnUpdateTask").attr("disabled", false);
                                            $('#editTaskModal').modal('hide');
                                            $('#editTaskModal form')[0].reset();
                                            refresh();   
                                        }
                            });
                        // End of ajax call
                            }
                        })
                });

    // END OF // Update contest

    // END OF UPDATE TASK

    // DELETE TASK
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;
         
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                // Ajax call
                    $.ajax({
                            url: '<?php echo base_url()?>user/home/delete_task',
                            data: {id: id},
                                success:function(){
                                    refresh()
                                }
                        });
                // End of ajax call
                    }
            })
    })
    // END OF DELETE TASK





});
// end of script
</script>

</html>
<!-- end document-->
