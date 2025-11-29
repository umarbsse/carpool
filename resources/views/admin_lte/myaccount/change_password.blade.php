@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Change your account password</h3>
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
    <!-- /.content -->
@endsection