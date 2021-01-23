<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forget Me Not</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>resources/plugins/summernote/summernote-bs4.min.css">

  <!-- Data Tables CSS -->
  <link href="<?php echo base_url()?>resources/css/jquery.dataTables.min.css" rel="stylesheet" media="all">

    <!-- Jquery-->
    <script src="<?php echo base_url()?>resources/js/jquery-3.5.1.min.js"></script>

    <!-- Data Tables JS-->
    <script src="<?php echo base_url()?>resources/js/jquery.dataTables.min.js"></script>

    <!-- Moment w locales JS-->
    <script src="<?php echo base_url()?>resources/js/moment.js"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url()?>resources/js/sweetalert2@10.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader">
    <img src="<?php echo base_url()?>resources/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

    <!-- NAVBAR -->
    <!-- <?php $this->load->view('includes/navbar.php'); ?> -->
    <!-- END NAVBAR-->

    <!-- MENU SIDEBAR-->
    <!-- <?php $this->load->view('includes/sidebar.php'); ?> -->
    <!-- END MENU SIDEBAR-->
  


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- DATA TABLE -->
                                <div class="card-header">
                                        <h2 class="card-title">Task List</h2>
                                        <button  type="button" class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#addTaskModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Add Task </button>
                                </div>
                                <div class="card-body p-8">
                                    <table id="taskTable" class="table table-sm" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Status</th>
                                                <th>Title</th>
                                                <th>Due Date</th>
                                                <th>Category</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
              
     
    <!-- view Task MODAL -->
    <div class="modal fade" id="viewTaskModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style=background-color:#46d4e0;>
                                <h4 class="modal-title" id="largeModalLabel" style=color:white;><strong>View Task</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                    </div>
                    <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" name="viewTaskForm" id="viewTaskForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="viewtaskTitle" class=" form-control-label">Title</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="viewtaskTitle" name="viewtaskTitle" placeholder="Title" maxlength="50" class="form-control">
                                        </div>
                                    </div>
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-users"></i>
                                            <label for="viewtaskCategory" class="form-control-label">Category</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="viewtaskCategory" id="viewtaskCategory" class="form-control">
                                                <option value="Education" selected>Education</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Work">Work</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="viewtaskDescription" class=" form-control-label">Description</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="viewtaskDescription" id="viewtaskDescription" rows="12" placeholder="Description" class="form-control" maxlength="2000"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="viewtaskDueDate" class=" form-control-label">Due Date</label>
                                        </div>
                                        <?php date_default_timezone_set('Asia/Manila');
                                        ?>
                                        <div class="col-4 col-md-8">
                                            <input type="datetime-local" 
                                            value=""
                                            id="viewtaskDueDate" name="viewtaskDueDate" class="form-control">
                                        </div>
                                    </div> -->
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END of view task MODAL -->

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
                                        <i style =padding-right:16px; class="fa fa-users"></i>
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
                                        $time = new DateTime();
                                        $time->add(new DateInterval('P1D')); ?>
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
                                        <i style =padding-right:16px; class="fa fa-users"></i>
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
                                            value="" 
                                            
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
        
                    
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="<?php echo base_url()?>resources/plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>resources/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>resources/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>resources/plugins/sparklines/sparkline.js"></script>

<!-- JQVMap -->
<script src="<?php echo base_url()?>resources/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>resources/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>resources/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>resources/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>resources/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>resources/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>resources/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>resources/dist/js/pages/dashboard.js"></script>
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
                { data: "taskStatus", render: function(data, type, row){
                    if(data == 1){
                        return '<div><input type="checkbox" value="'+row.id+'" id="taskComplete" name="taskComplete"></div>'
                    }
                    if(data == 2){
                        return '<div><input type="checkbox" value="'+row.id+'" id="taskUncomplete" name="taskUncomplete" checked></div>'
                    }
                }},
                { data: "taskTitle", render: function(data, type, row){
                    return '<button class="btn btn_view" and style="background-color:transparent" value="'+row.id+'" title="View" type="button" alt="View">'+data+'</button></div>';
                }},
                { data: "taskDueDate", render: function(data, type, row){
                    if(row.taskStatus == 2
                    ){
                        return moment(data).format('LLL')+' - '+'<span class="badge badge-pill badge-success">Complete</span>';
                    }
                    else if(moment(data).format('MM DD YYYY, h:mm:ss') <= moment().format('MM DD YYYY, h:mm:ss') &&
                    moment(data).format('MM DD YYYY, h:mm:ss') >= moment().subtract(1, 'days').format('MM DD YYYY, h:mm:ss') &&
                    row.taskStatus == 1
                    ){
                        return moment(data).format('LLL')+' - '+'<span class="badge badge-pill badge-warning">Due Soon</span>';
                    }
                    else if((moment(data).format('MM DD YYYY, h:mm:ss')) <= (moment().format('MM DD YYYY, h:mm:ss')) &&
                    row.taskStatus == 1){
                        return moment(data).format('LLL')+' - '+'<span class="badge badge-pill badge-danger">Over Due</span>';
                    }
                    else{
                        return moment(data).format('LLL');
                    }
                }, "orderData":[3]},
                { data: "taskCategory", render: function(data, type, row){
                    if(data == 'Personal'){
                        return '<a style="color:orange">'+ data +'</a>'
                    }
                    else if(data == 'Education'){
                        return '<a style="color:navy">'+ data +'</a>'
                    }
                    else if(data == 'Work'){
                        return '<a style="color:olive">'+ data +'</a>'
                    }
                    
                }},
                { data: "taskStatus", render: function(data, type, row){
                    
                        return '<div class="btn-group">'+
                                // '<button class="btn btn-primary btn-sm btn_view" value="'+row.id+'" title="View" type="button" alt="View"><i class="fa fa-eye"></i> </button>'+
                                '<button class="btn btn-warning btn-sm btn_update" value="'+row.id+'" title="Edit" type="button" alt="View"><i class="fa fa-edit"></i> </button>'+
                                '<button class="btn btn-danger btn-sm btn_delete" value="'+row.id+'" title="Delete" type="button" alt="Delete"> <i class="fa fa-trash"> </i></button></div>';
                    
                }}
            ],

            "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}],
            "order": [[3, "asc"]]
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
                                            $("#btnAddTask").attr("disabled", false);
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
                        $("#btnAddTask").attr("disabled", false);
                        // end of ajax call
                }       
    });
    // END OF // Create task

    // PASS TASK 
    $(document).on("click", ".btn_update", function(){
        var id = this.value;
        
        $.ajax({
            url: '<?php echo base_url()?>user/home/get_task/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="edittaskTitle"]').val(row.taskTitle);
                    $('[name="edittaskCategory"]').val(row.taskCategory);
                    $('[name="edittaskDescription"]').val(row.taskDescription);
                    $('[name="edittaskDueDate"]').val(row.taskDueDate);
                    $('#editTaskModal').modal('show'); // show bootstrap modal when complete loaded
                }
        })
       
    });
    // END OF PASS TASK

    // VIEW TASK 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        
        $.ajax({
            url: '<?php echo base_url()?>user/home/get_task/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="viewtaskTitle"]').val(row.taskTitle);
                    $('[name="viewtaskCategory"]').val(row.taskCategory);
                    $('[name="viewtaskDescription"]').val(row.taskDescription);
                    $('[name="viewtaskDueDate"]').val(row.taskDueDate);
                    $('#viewTaskModal').modal('show'); // show bootstrap modal when complete loaded
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
                            else{
                                $("#btnUpdateTask").attr("disabled", false);
                            }
                        })
                        
                });
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

    // COMPLETE TASK
    $(document).on("change", "#taskComplete", function(){
        var id = this.value;

        // Ajax call
            $.ajax({
                url: '<?php echo base_url()?>user/home/complete_task',
                data: {id: id},
                    success:function(){
                        refresh()
                    }
            });
        // End of ajax call  
    });
    // END OF COMPLETE TASK

    // COMPLETE TASK
    $(document).on("change", "#taskUncomplete", function(){
        var id = this.value;

        // Ajax call
            $.ajax({
                url: '<?php echo base_url()?>user/home/uncomplete_task',
                data: {id: id},
                    success:function(){
                        refresh()
                    }
            });
        // End of ajax call  
    });
    // END OF COMPLETE TASK





});
// end of script
</script>
</html>
