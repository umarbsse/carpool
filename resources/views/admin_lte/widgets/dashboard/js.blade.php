@if (is_controller('dashboard'))
  <!-- jQuery -->
  <script src="{{ asset(get_private_template_name().'/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset(get_private_template_name().'/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset(get_private_template_name().'/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset(get_private_template_name().'/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset(get_private_template_name().'/plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset(get_private_template_name().'/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset(get_private_template_name().'/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset(get_private_template_name().'/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset(get_private_template_name().'/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset(get_private_template_name().'/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset(get_private_template_name().'/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset(get_private_template_name().'/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset(get_private_template_name().'/dist/js/demo.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset(get_private_template_name().'/dist/js/pages/dashboard.js') }}"></script>
@else
  <!-- jQuery -->
  <script src="{{ asset(get_private_template_name().'/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset(get_private_template_name().'/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Bootstrap Switch -->
  <script src="{{ asset(get_private_template_name().'/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
  <!-- bs-custom-file-input -->
  <script src="{{ asset(get_private_template_name().'/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset(get_private_template_name().'/dist/js/adminlte.js') }}"></script>
  <!-- Page specific script -->
  <script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
@endif
@if (is_controller('location'))
  <!-- DataTables  & Plugins -->
  <script src="{{ asset(get_private_template_name().'/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset(get_private_template_name().'/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $('.data_table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endif


  <!-- Custom JS -->
  <script src="{{ asset(get_private_template_name().'/js/custom.js') }}"></script>
















