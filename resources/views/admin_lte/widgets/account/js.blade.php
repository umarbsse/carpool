<!-- jQuery -->
<script src="{{ asset(get_private_template_name().'/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset(get_private_template_name().'/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset(get_private_template_name().'/dist/js/adminlte.min.js') }}"></script>

<!-- Bootstrap Switch -->
<script src="{{ asset(get_private_template_name().'/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

<script>
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>