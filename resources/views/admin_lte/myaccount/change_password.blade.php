
{{-- head section include the meta tags and css files include --}}
@include(get_private_template_name().'.widgets.dashboard.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Preloader -->
    @include(get_private_template_name().'.widgets.dashboard.preloader')
  
    <!-- Navbar -->
    @include(get_private_template_name().'.widgets.dashboard.navbar')
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    @include(get_private_template_name().'.widgets.dashboard.sidebar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include(get_private_template_name().'.widgets.dashboard.breadcrumb')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInput">New Password</label>
                    <div class="input-group mb-3">
                        <input type="text" id="exampleInput" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInput">Retype Password</label>
                    <div class="input-group mb-3">
                        <input type="text" id="exampleInput" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                    </div>
                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Credits like copyrights ets -->
    @include(get_private_template_name().'.widgets.dashboard.credits')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
{{-- Footer which contains footer and javascript files --}}
@include(get_private_template_name().'.widgets.dashboard.footer')
</body>
</html>
