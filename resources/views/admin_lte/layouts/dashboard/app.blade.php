
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
        @yield('main_content')
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
