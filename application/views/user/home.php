<?php 

if (isset($this->session->userdata['logged_in'])) {
    $userEmail = ($this->session->userdata['logged_in']['userEmail']);
    $userId = ($this->session->userdata['logged_in']['userId']);
} 
else {
    header("location: ".base_url()."user/login");
}


?>

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

            <div style="padding-left:70%" class="content-header">
                <div class="container mt-5">
                    <div  class="d-flex justify-content-end">
                        <div id="signupIconMain" class="col-2 col-lg-2 text-center">
                            <i class="nav-icon fas fa-home" style="font-size:35px;"></i>
                        </div>
                        <div class="col-12">
                            <h1 id="signupTitle" class="m-0 text-dark text-bold">Home</h1>
                            <span id="signupDesc">Welcome, manage all your tasks here!</span>
                        </div>
                        <div class="col-12">
                            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
                                <div class="toast-header" >
                                    <!-- <img src="..." class="rounded mr-2" alt="..."> -->
                                    <strong class="mr-auto">Daily Quotes</strong>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body" id="quotes" style="color:white">
                                    
                                </div>
                            </div>
                        </div>
                        <div id="chart">
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-left:5%; margin-right:5%; margin-top:1%">
              <div class="card-header">
                <h3 class="card-title">Upcoming Task (This Week)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div id="upcomingTask" class="card-body">
                
              </div>
            </div>
            
            
            <!-- Main content -->
            <section class="content mt-5">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="card ml-lg-5 mr-lg-5 mb-0">
                            <!-- DATA TABLE -->
                            <div class="card-header">
                                <h1 class="card-title mt-2 text-bold" style="font-size:1.5rem"><i
                                        class="fas fa-clipboard-list mr-1"></i> TASK
                                    LIST</h1>
                                    <div>
                                        <button type="button" class="btn btn-lg btn-success float-right" data-toggle="modal"
                                            data-target="#addTaskModal">
                                            <i class="fa fa-plus mr-2"></i> <b>ADD NEW TASK</b> 
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary float-right" data-toggle="modal" style="margin-right:10px"
                                                            data-target="#productivityModal">
                                                            <i class="fa fa-eye mr-2"></i> <b>VIEW PRODUCTIVITY</b>
                                        </button>
                                    </div>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table id="taskTable" class="table" style="width:100%">
                                        <thead class="text-right">
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
                
                
        </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- This week productivity modal -->
    <div class="modal fade" id="productivityModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style=background-color:green;>
                    <h4 class="modal-title" id="largeModalLabel" style=color:white;><strong>Productivity Chart</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-body card-block">
                        <h4 style="text-align: center">Last Week</h4>
                        <div id="productivity">
                        
                        </div>  
                        <br><br><h4 style="text-align: center">This Year</h4>
                        <div id="monthly_productivity">
                        
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    

    <!-- view Task MODAL -->
    <div class="modal fade" id="viewTaskModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
        aria-hidden="true">
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
                                    <i style=padding-right:16px; class="fa fa-trophy"></i>
                                    <label for="viewtaskTitle" class=" form-control-label">Title</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <input type="text" id="viewtaskTitle" name="viewtaskTitle" placeholder="Title"
                                        maxlength="50" class="form-control">
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
                                    <i style=padding-right:16px; class="fa fa-comment"></i>
                                    <label for="viewtaskDescription" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <textarea name="viewtaskDescription" id="viewtaskDescription" rows="12"
                                        placeholder="Description" class="form-control" maxlength="2000"></textarea>
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
    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style=background-color:#28a745;>
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
                                    <i style=padding-right:16px; class="fa fa-trophy"></i>
                                    <label for="taskTitle" class=" form-control-label">Title</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <input type="text" id="taskTitle" name="taskTitle" placeholder="Title"
                                        maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-users"></i>
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
                                    <i style=padding-right:16px; class="fa fa-comment"></i>
                                    <label for="taskDescription" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <textarea name="taskDescription" id="taskDescription" rows="12"
                                        placeholder="Description" class="form-control" maxlength="2000"></textarea>
                                </div>
                            </div>
                            <!-- <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-comment"></i>
                                    <label for="taskFiles" class=" form-control-label">File Attached</label>
                                    
                                </div>
                                <div class="col-4 col-md-8">
                                    <input type="file" id="taskFiles" name="taskFiles" placeholder="Files"
                                        class="form-control">
                                </div>
                            </div> -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-calendar"></i>
                                    <label for="taskDueDate" class=" form-control-label">Due Date</label>
                                </div>
                                <?php date_default_timezone_set('Asia/Manila');
                                $time = new DateTime();
                                $time->add(new DateInterval('P1D')); ?>
                                <div class="col-4 col-md-8">
                                    <input type="datetime-local" value="<?php echo $time->format('Y-m-d\TH:i') ?>"
                                        id="taskDueDate" name="taskDueDate" class="form-control">
                                </div>
                            </div>
                            <div style=float:right;>
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
    <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
        aria-hidden="true">
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
                                    <i style=padding-right:16px; class="fa fa-trophy"></i>
                                    <label for="edittaskTitle" class=" form-control-label">Title</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <input type="text" id="id" name="id" hidden>
                                    <input type="text" id="edittaskTitle" name="edittaskTitle" placeholder="Title"
                                        maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-users"></i>
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
                                    <i style=padding-right:16px; class="fa fa-comment"></i>
                                    <label for="edittaskDescription" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <textarea name="edittaskDescription" id="edittaskDescription" rows="12"
                                        placeholder="Description" class="form-control" maxlength="2000"></textarea>
                                </div>
                            </div>
                            <!-- <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-comment"></i>
                                    <label for="editaskFiles" class=" form-control-label">File Attached</label>
                                    
                                </div>
                                <div class="col-4 col-md-8">
                                <input type="file" id="edittaskFiles" name="edittaskFiles" placeholder="Files"
                                class="form-control">
                                <a id="filesAttached" name="filesAttached" href=""></a>
                                    <button id="filesAttachedButton" style="padding:5px" class="btn btn-sm bg-transparent btn_delete_files"></button>
                                </div>
                                
                            </div> -->

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-calendar"></i>
                                    <label for="editSubTask" class=" form-control-label">Sub Tasks</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <button class="btn btn-sm btn_addSubTask btn-success">
                                    ✚ Add Sub Task</button><br>
                                    <div id="editSubTask">
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-calendar"></i>
                                    <label for="edittaskDueDate" class=" form-control-label">Due Date</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <input type="datetime-local" value="" id="edittaskDueDate" name="edittaskDueDate"
                                        class="form-control">
                                </div>
                            </div>
                            <div style=float:right;>
                                <input type="submit" id="btnUpdateTask" value="Update" class="btn btn-sm btn-warning">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- ADD SUB Task MODAL -->
<div class="modal fade" id="addSubTaskModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style=background-color:#28a745;>
                    <h4 class="modal-title" id="largeModalLabel" style=color:white;><strong>Add Sub Task</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-body card-block">
                        <form action="" method="post" name="addSubTaskForm" id="addSubTaskForm">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <i style=padding-right:16px; class="fa fa-create"></i>
                                    <label for="addSubTaskName" class=" form-control-label">Sub Task Name</label>
                                </div>
                                <div class="col-4 col-md-8">
                                    <input type="text" id="subtaskParentId" name="subtaskParentId" hidden>
                                    <input type="text" id="addSubTaskName" name="addSubTaskName" placeholder="Name"
                                        maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div style=float:right;>
                                <input type="submit" id="btnAddSubTask" value="Add" class="btn btn-sm btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<?php $this->load->view('includes/script.php'); ?>
<?php $this->load->view('includes/chart.php'); ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript">

function loadtable() {

    receivedTable = $("#taskTable").DataTable({
        initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var category = $('<select style="padding:3px;"><option value="">All Category</option></select>')
                            .appendTo( $(column.header()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
        
                                column
                                    .search(val)
                                    .draw();
                            } );
                            category.append( '<option value="Education">Education</option>' )
                            category.append( '<option value="Personal">Personal</option>' )
                            category.append( '<option value="Work">Work</option>' )
                    } );
                },
        
        ajax: {
            url: "<?php echo base_url() ?>user/home/view_task/"+<?php echo $userId ?>,
            dataSrc: function(data) {
                

                var return_data = new Array();

                for (let i = 0; i < data.length; i++) {
                    listIcon = ``;
                    switch (data[i]["taskCategory"]) {
                        case "Education":
                            listIcon = `<i class="fas fa-book"></i>`;
                            taskCategory = `Education`;
                            break;

                        case "Work":
                            listIcon = `<i class="fas fa-briefcase"></i>`;
                            taskCategory = `Work`;
                            break;

                        case "Personal":
                            listIcon = `<i class="fas fa-running"></i>`;
                            taskCategory = `Personal`;
                            break;
                    }

                    task_status = data[i]["taskStatus"];

                    if (task_status == "1") {
                        task_due__date = moment(data[i]['taskDueDate']).diff(moment(), 'days');
                        task_due__hours = moment(data[i]['taskDueDate']).diff(moment(), 'hours');
                        checkbox = `<input type="checkbox" value="${data[i]['id']}" class="taskComplete" name="taskComplete" id="taskComplete${data[i]['id']}">
                        <label for="taskComplete${data[i]['id']}"></label>`

                        if (task_due__date <= 0 && task_due__hours < 0) {
                            task_status =
                                `<small class="ml-2 badge bg-gradient-dark d-inline" style="font-size:13px"><i class="far fa-clock mr-1"></i>Overdue - ${(moment(data[i]['taskDueDate']).diff(moment(), 'days') * -1)} Day/s late</small>`;
                        } else if (task_due__date == 0) {
                            // DUE TODAY
                            if (moment(data[i]['taskDueDate']).format("DD MM YYYY") == moment().format(
                                    "DD MM YYYY")) {
                                task_status =
                                    `<small class="ml-2 badge bg-gradient-red d-inline" style="font-size:13px"><i class="far fa-clock mr-1"></i>Due Today - ${moment(data[i]['taskDueDate']).diff(moment(), 'hours')} hour/s left</small>`;
                            } else if(task_due__hours > 0){
                                task_status =
                                    `<small class="ml-2 badge bg-gradient-orange d-inline" style="font-size:13px"><i class="far fa-clock mr-1"></i>Almost Due - ${moment(data[i]['taskDueDate']).diff(moment(), 'hours')} hour/s left</small>`;
                            }
                        } else if (task_due__date >= 1 && task_due__date <= 3) {
                            // OVER DUE
                            task_status =
                                `<small class="ml-2 badge bg-gradient-yellow d-inline" style="font-size:13px"><i class="far fa-clock mr-1"></i>${moment().countdown(data[i]['taskDueDate'], countdown.DAYS | countdown.HOURS).toString()} left</small>`;

                        } else if (task_due__date >= 4 && task_due__date <= 7) {
                            // MODERATE
                            task_status =
                                `<small class="ml-2 badge bg-gradient-blue d-inline" style="font-size:13px"><i class="far fa-clock mr-1"></i>${moment().countdown(data[i]['taskDueDate'], countdown.DAYS | countdown.HOURS).toString()} left</small>`;
                        } else if (task_due__date >= 8) {
                            // MODERATE
                            task_status =
                                `<small class="ml-2 badge bg-gradient-green d-inline" style="font-size:13px"><i class="far fa-clock mr-1"></i>${moment().countdown(data[i]['taskDueDate'], countdown.DAYS | countdown.HOURS).toString()} left</small>`;
                        }
                    } else if (task_status == "2") {
                        task_status =
                            `<small class="ml-2 badge bg-gradient-green d-inline" style="font-size:13px"><i class="far fa-clock mr-1"></i> Completed</small>`;
                        checkbox = `<input checked type="checkbox" value="${data[i]['id']}" class="taskUncomplete" name="taskUncomplete" id="taskUncomplete${data[i]['id']}">
                        <label for="taskUncomplete${data[i]['id']}"></label>`
                        listIcon = `<i><button class="btn btn-danger btn-lg btn_delete" style="position:absolute; right:0px; top:10px" value="${data[i]['id']}" title="Delete" type="button" alt="Delete"> <i class="fa fa-trash"></i></button></i>`;
                        
                    }

                    list = `<div class="small-box mb-0" style=" overflow: hidden;">
                    <div class="inner p-2">
                       <div class="row mr-0 ml-0">
                          <div class="col-1">
                             <div class="icheck-primary ml-1 mt-2">
                                ${checkbox}
                             </div>
                          </div>
                          <div class="col-11 task-details">
                             <button class="btn btn_update text-left" style="padding:0;" title="Edit Task"
                             value="${data[i]['id']}">${data[i]['taskTitle']} ${task_status}<br>
                             <small style="color: #acacac; font-size:14px;">${data[i]['taskDueDateFormatted']} - ${taskCategory}</small>
                             <p class="mb-0" style="white-space: pre-wrap;">${data[i]['taskDescription']}</p></button><br>
                          </div>
                       </div>
                    </div>
                    <div class="icon">
                       ${listIcon}
                    </div>
                    </div>`
                    return_data.push({
                        DT_RowId: data[i]["id"],
                        taskDetails: list,
                    });
                    
                }

                return return_data;
            },
        },
        columns: [{
            data: "taskDetails",
        }],
        bSort: false,
        language: {
            info: "Showing _START_ to _END_ of _TOTAL_ Task",
            infoEmpty: "",
            infoFiltered: "(filtered from _TOTAL_ total Task)",
            lengthMenu: "Show _MENU_ Task per page",
            zeroRecords: "No Task available",
        },
        
        
    });
    
}


function refresh() {
    var url = "<?php echo base_url()?>user/home/view_task/"+<?php echo $userId ?>;

    receivedTable.ajax.url(url).load();
}

loadtable()






// Create task
$('#addTaskForm').on('submit', function(e) {

    e.preventDefault();
    $("#btnAddTask").attr("disabled", true);

    var taskTitle = document.addTaskForm.taskTitle.value;
    var taskCategory = document.addTaskForm.taskCategory.value;
    var taskDescription = document.addTaskForm.taskDescription.value;
    var taskDueDate = document.addTaskForm.taskDueDate.value;

    var taskDueDate = new Date(taskDueDate);

    if (taskTitle == '' || taskDescription == '' || taskCategory == '' || taskDueDate == '') {
        Swal.fire({
            title: 'Warning!',
            text: 'Please fill out required field.',
            icon: 'warning',
            confirmButtonText: 'Ok'
        }).then((result) => {
            $("#btnAddTask").attr("disabled", false);
        })
        $("#btnAddTask").attr("disabled", false);
    } else {
        // ajax call
        var form = $('#addTaskForm');
        // ajax post
        $.ajax({
            url: '<?php echo base_url() ?>user/home/add_task/'+<?php echo $userId?>,
            type: 'post',
            data: new FormData(this),
            processData:false,
            contentType:false,

            success: function() {
                $("#btnAddTask").attr("disabled", false);
                $('#addTaskModal').modal('hide');
                $('#addTaskModal form')[0].reset();
                refresh()
                get_dataset()
                get_upcoming_task();
                get_this_week()
                get_month()
            }

        });
        $("#btnAddTask").attr("disabled", false);
        // end of ajax call
    }
});
// END OF // Create task

// PASS TASK 
$(document).on("click", ".btn_update", function() {
    var id = this.value;
    $.ajax({
        url: '<?php echo base_url() ?>user/home/get_task/' + id,
        type: "GET",
        dataType: "JSON",

        success: function(data) {
            var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
            var row = parsedResponse[0];
            var filesdir = "<?php echo base_url()?>resources/files/"+row.taskFiles;

            $('[name="id"').val(row.id);
            $('[id="subtaskParentId"').val(row.id);
            $('[name="edittaskTitle"]').val(row.taskTitle);
            $('[name="edittaskCategory"]').val(row.taskCategory);
            $('[name="edittaskDescription"]').val(row.taskDescription);
            $('#filesAttached').attr("href", filesdir);
            $('#filesAttached').html(row.taskFiles);
            if(row.taskFiles !== ""){
                $('#filesAttachedButton').val(row.id);
                $('#filesAttachedButton').html('Delete');
            }
            $('[name="edittaskDueDate"]').val(row.taskDueDate);
        }
    })

    $.ajax({
        url: '<?php echo base_url() ?>user/home/get_subtask/' + id,
        type: "GET",
        dataType: "JSON",

        success: function(data) {
            var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
            if(parsedResponse.length == 0){
                $("#editSubTask").html("")
            }
            console.log(parsedResponse)
            var html = `<div>Sub Tasks: </div>`;
            for(i=0; i<parsedResponse.length; i++){
                if(parsedResponse[i]['subtaskStatus'] != '2'){
                    html += `<div class=""><input class="subtaskComplete" value="${parsedResponse[i]['id']}"
                    type="checkbox"> <small style="font-size:17px">${parsedResponse[i]['subtaskTitle']}</small></div>`
                }
                else{
                    html += `<div class=""><input checked class="subtaskUncomplete" value="${parsedResponse[i]['id']}"
                    type="checkbox"> <small  style="font-size:17px">${parsedResponse[i]['subtaskTitle']}</small></div>`
                }
                $("#editSubTask").html(html)
            }

            $('#editTaskModal').modal('show'); // show bootstrap modal when complete loaded
        }
    })

});
// END OF PASS TASK

// DELETE FILES ATTACHED 
$(document).on("click", ".btn_delete_files", function(e) {
    e.preventDefault()
    var id = this.value;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Ajax call
            $.ajax({
                url: '<?php echo base_url() ?>user/home/delete_files',
                data: {
                    id: id
                },
                success: function() {
                    refresh()
                    get_dataset()
                    get_upcoming_task();
                    $('#filesAttached').html('');
                    $('#filesAttachedButton').html('');
                    get_this_week()
                    get_month()
                }
            });
            // End of ajax call
        }
    })

});
// END OF PASS TASK


// VIEW TASK 
$(document).on("click", ".btn_view", function() {
    var id = this.value;

    $.ajax({
        url: '<?php echo base_url() ?>user/home/get_task/' + id,
        type: "GET",
        dataType: "JSON",

        success: function(data) {
            var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
            var row = parsedResponse[0];
            $('[name="id"').val(row.id);
            $('[name="viewtaskTitle"]').val(row.taskTitle);
            $('[name="viewtaskCategory"]').val(row.taskCategory);
            $('[name="viewtaskDescription"]').val(row.taskDescription);
            $('[name="viewtaskDueDate"]').val(row.taskDueDate);
            $('#viewTaskModal').modal(
                'show'); // show bootstrap modal when complete loaded
        }
    })

});
// END OF VIEW TASK

// UPDATE TASK
$('#btnUpdateTask').on('click', function(e) {
    e.preventDefault();
    $("#btnUpdateTask").attr("disabled", true);

    var id = document.editTaskForm.id.value
    var editTaskTitle = document.editTaskForm.edittaskTitle.value;
    var editTaskCategory = document.editTaskForm.edittaskCategory.value;
    var editTaskDescription = document.editTaskForm.edittaskDescription.value;
    var editTaskDueDate = document.editTaskForm.edittaskDueDate.value;
    

    if(editTaskTitle == "" || editTaskDescription == ""){
        Swal.fire({
            title: 'Warning!',
            text: 'Please fill out required field.',
            icon: 'warning',
            confirmButtonText: 'Ok'
        }).then((result) => {
            $("#btnUpdateTask").attr("disabled", false);
        })
        $("#btnUpdateTask").attr("disabled", false);
    }
    else{
        let form = document.getElementById('editTaskForm');

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
                    url: '<?php echo base_url() ?>user/home/update_task/'+<?php echo $userId ?>,
                    type: 'post', 
                    data: new FormData(form),
                    processData:false,
                    contentType:false,

                    success: function() {
                        $("#btnUpdateTask").attr("disabled", false);
                        $('#editTaskModal').modal('hide');
                        $('#editTaskModal form')[0].reset();
                        refresh();
                        get_dataset()
                        get_upcoming_task();
                        get_this_week()
                        get_month()
                    }
                });
                // End of ajax call
            } else {
                $("#btnUpdateTask").attr("disabled", false);
            }
        })

    }

});
// END OF UPDATE TASK

// DELETE TASK
$(document).on("click", ".btn_delete", function() {
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
                url: '<?php echo base_url() ?>user/home/delete_task',
                data: {
                    id: id
                },
                success: function() {
                    refresh()
                    get_dataset()
                    get_upcoming_task();
                    get_this_week()
                    get_month()
                }
            });
            // End of ajax call
        }
    })
})
// END OF DELETE TASK

// COMPLETE TASK
$(document).on("change", ".taskComplete", function() {
    var id = this.value;

    // Ajax call
    $.ajax({
        url: '<?php echo base_url() ?>user/home/complete_task',
        data: {
            id: id
        },
        success: function() {
            refresh()
            get_dataset()
            get_upcoming_task();
            get_this_week()
            get_month()
        }
    });
    // End of ajax call  
});
// END OF COMPLETE TASK

// UNCOMPLETE TASK
$(document).on("change", ".taskUncomplete", function() {
    var id = this.value;

    // Ajax call
    $.ajax({
        url: '<?php echo base_url() ?>user/home/uncomplete_task',
        data: {
            id: id
        },
        success: function() {
            refresh()
            get_dataset()
            get_upcoming_task();
            get_this_week()
            get_month()
        }
    });
    // End of ajax call  
});
// END OF COMPLETE TASK


// GET DATASET
function get_dataset(){
    $('#chart').html('')
    $.ajax({
        url: '<?php echo base_url() ?>user/home/get_dataset/'+<?php echo $userId ?>,
        type: "GET", 
        datatype: "JSON", 
        success: function(data) {
            var data = jQuery.parseJSON(data)
            var completedCount = data.completed
            var activeCount = data.active

            dataset.push(completedCount)
            dataset.push(activeCount)

            if(dataset.length == 2){
                show_chart()
            }

        }
    });
}

get_dataset()
// END OF GET DATASET FUNCTION


// UPCOMING TASKS
function get_upcoming_task(){
    $('#upcomingTask').html('')
    $.ajax({
        url: '<?php echo base_url() ?>user/home/view_upcoming_task/'+<?php echo $userId ?>,
        type: "GET",
        datatype: "JSON",
        success: function(data){
            var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
            for(i=0; i<parsedResponse.length; i++){
                
                var html = `
                <small style="font-size:14px;">Title: ${parsedResponse[i].taskTitle} |</small>
                <small style="color: gray; font-size:14px;">Due Date: ${parsedResponse[i].taskDueDateFormatted} |</small>
                <small style="color: blue; font-size:14px;"> Category: ${parsedResponse[i].taskCategory}</small></p>
                `
                
                $('#upcomingTask').append(html)
            }

        }
    })

};

get_upcoming_task();
// END OF UPCOMING TASK

$(".btn_addSubTask").on("click", function(e){
    e.preventDefault();

    $('#addSubTaskModal').modal('show');

})


// ADDING SUBTASK
$("#addSubTaskModal").on("submit", function(e){
    e.preventDefault();
    var id = $("#id").val();
    var subTaskName = $("#addSubTaskName").val();
    var form = $('#addSubTaskModal'); 

    $.ajax({
        url: '<?php echo base_url() ?>user/home/add_sub_task',
        type: "POST",
        data: {subTaskName: subTaskName, id: id},

        success: function(data){
            var subTask = `<div class=""><input type="checkbox"> ${subTaskName}</div>`
            $("#editSubTask").append(subTask)
            $("#addSubTaskModal").modal('hide')
            $('#addSubTaskModal form')[0].reset();
        }
    })
})
// END OF ADDING SUBTASK


// COMPLETE SUBTASK
$(document).on("change", ".subtaskComplete", function() {
    var id = this.value;

    // Ajax call
    $.ajax({
        url: '<?php echo base_url() ?>user/home/complete_subtask',
        data: {
            id: id
        },
        success: function() {
            
        }
    });
    // End of ajax call  
});
// END OF COMPLETE SUBTASK

// UNCOMPLETE SUBTASK
$(document).on("change", ".subtaskUncomplete", function() {
    var id = this.value;
    console.log(id)

    // Ajax call
    $.ajax({
        url: '<?php echo base_url() ?>user/home/uncomplete_subtask',
        data: {
            id: id
        },
        success: function() {
            
        }
    });
    // End of ajax call  
});
// END OF COMPLETE SUBTASK


function randomNotif(){
    var quotes = ['“Let our advance worrying become advance thinking and planning.” – Winston Churchill'
                ,'“Have a good plan, Execute it violently, Do it today” – General Douglas McArthur'
                ,'“Create with the heart; build with the mind.” ― Criss Jami'
                ,'“To be disciplined is to follow in a good way. To be self-disciplined is to follow in a better way.” ― Corita Kent'
                ,'“Make each day your masterpiece.”– John Wooden'
                ,'“Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway.”– Earl Nightingale'
                ,`“Go as far as you can see; when you get there, you'll be able to see further.”– Thomas Carlyle`
                ,'“Action is the foundational key to all success.”– Picasso'
                ,'“Your talent determines what you can do. Your motivation determines how much you are willing to do. Your attitude determines how well you do it.”– Lou Holtz'
                ,'“The way to get started is to quit talking and begin doing.”– Walt Disney'
                ,`“A dream doesn't become reality through magic; it takes sweat, determination, and hard work.”– Colin Powell`
                ,`The price of success is hard work, dedication to the job at hand, and the determination that whether we win or lose, we have applied the best of ourselves to the task at hand. - Vince Lombardi `
                ,`The secret of getting ahead is getting started. The secret of getting started is breaking your complex overwhelming tasks into small manageable tasks, and starting on the first one. - Mark Twain `
                ,`Attempt easy tasks as if they were difficult, and difficult as if they were easy; in the one case that confidence may not fall asleep, in the other that it may not be dismayed. - Baltasar Gracian `
                ,`Nothing great was ever achieved without enthusiasm. - Ralph Waldo Emerson `
                ,`Always render more and better service than is expected of you, no matter what your task may be. - Og Mandino `
                ,`Concentration is needed to complete the task. - Lailah Gifty Akita `
                ,`None of the day is long enough to complete/achieve the work; we deliberately avoid undertaking or finishing. Start on time to accomplish on time. - Shahenshah Hafeez Khan `
                ,`The more you discipline yourself to persist on a major task, the more you like and respect yourself, and the higher is your self-esteem. - Brian Tracy `
                ,`Any task is difficult to do at the beginning, but its gets better with persistent labour. - Lailah Gifty Akita `
                ,`We should focus our mind, body, heart, and soul on achieving happiness in accepting responsibilities and, of course, displaying enthusiasm in doing meaningful tasks. - Dr Prem Jagyasi `
                ,`Put your heart and soul into whatever you do – but you won’t be able to do so until you have complete faith in whatever you are doing. - Dr Prem Jagyasi `
                ,`If it is worthy doing, it worth doing so well. - Lailah Gifty Akita `
                ,`Ensure you have done each day’s portion of the heavy responsibilities resting on you. Never delay your success! - Israelmore Ayivor `
                ,`Leaders know how to set priorities. They focus on the task that requires the most rapid attention. - Israelmore Ayivor `
                ,`Spread Smiles, it’s the prophetic task you are assigned! - Mahrukh `
                ,`God knows you have the ability to accomplish the task that He is giving you - Sunday Adelaja `
                ,`A task which seems difficult, can be done with adequate training. - Lailah Gifty Akita `

                ]

    var colors = ['#173F5F', '#20639B', '#3CAEA3', '#F6D55C', '#ED553B'
                , '#FFB997', '#F67E7D', '#843B62', '#621940', '#0B632D']

    var quotesNum = Math.floor(Math.random() * quotes.length);
    var colorNum = Math.floor(Math.random() * colors.length)
    $('.toast').css("background-color", colors[colorNum]);
    $('#quotes').html(quotes[quotesNum])
    $('.toast').toast('show')
}


randomNotif()

function get_this_week(){
    dataset = []
    dailyset = []
    dateset = []
    dayset = []
    monthset = []
    var userId = '<?php echo $userId?>'
    $.ajax({
        url: '<?php echo base_url() ?>user/home/get_this_week/'+userId,
        type: 'GET',
        datatype: 'JSON',

        success:function(data){
            var parsedResponse = jQuery.parseJSON(data);
            console.log(parsedResponse)
            for(i=0 ; i<7; i++){
                dailyset.push(parsedResponse['week'][i][0]['count'])
                dayset.push(parsedResponse['week'][i][1])
            }
            console.log(dailyset)
            console.log(dayset)

            show_productivity();
        }
    })
}

get_this_week();

function get_month(){
    var userId = '<?php echo $userId?>'
    $.ajax({
        url: '<?php echo base_url() ?>user/home/get_month/'+userId,
        type: 'GET',
        datatype: 'JSON',
        async: false,

        success:function(data){
            var data = jQuery.parseJSON(data);
            console.log(data)
              for(i=0; i<data.taskCount.length; i++){
                monthset[data.taskCount[i].month -1] = (data.taskCount[i].count)
              }
              
            show_month();
        }
    })
}

get_month();
</script>

</html>