 <!-- Jquery-->
 <script src="<?php echo base_url() ?>resources/js/jquery-3.5.1.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url() ?>resources/dist/js/adminlte.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?php echo base_url() ?>resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Summernote -->
 <script src="<?php echo base_url() ?>resources/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- DataTables -->
 <script src="<?php echo base_url() ?>resources/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url() ?>resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url() ?>resources/plugins/datatables-responsive/js/dataTables.responsive.min.js">
 </script>
 <script src="<?php echo base_url() ?>resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
 </script>
 <!-- Moment Countdown -->
 <script src="<?php echo base_url() ?>resources/plugins/moment/moment.min.js"></script>
 <script src="<?php echo base_url() ?>resources/plugins/moment-countdown/dist/countdown.min.js"></script>
 <script src="<?php echo base_url() ?>resources/plugins/moment-countdown/dist/moment-countdown.min.js"></script>
 <!-- daterangepicker -->
 <script src="<?php echo base_url() ?>resources/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="<?php echo base_url() ?>resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
 </script>
 <!-- Sweet Alert -->
 <script src="<?php echo base_url() ?>resources/js/sweetalert2@10.js"></script>

 <!-- Notify JS -->
 <script src="<?php echo base_url() ?>resources/js/notify.js"></script>
 <script src="<?php echo base_url() ?>resources/js/notify.min.js"></script>



 <script>
    // Notify Alert
    function showNotify(icon, message, type, from, align){
    $.notify({
          icon: icon,
          message: message
      },{
          type: type,
          timer: 4000,
          placement: {
              from: from,
              align: align
          }
      });
    }

    // Show Confirm Swal Alert
    function showSwal(title, text, icon, confirmButtonText){
      Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: confirmButtonText
      }).then((result) => {
        if (result.isConfirmed) {
            return result
        }
      })
    }
  </script>