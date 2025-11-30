@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- Input addon -->
            <form method="POST" action="{{ route('my_account_password_update') }}">
              @csrf
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Change your account password</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInput">New Password</label>
                      <div class="input-group mb-3">
                          <input type="password" name="password" class="form-control" placeholder="New Password">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-lock"></i></span>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInput">Retype Password</label>
                      <div class="input-group mb-3">
                          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password">
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
            </form>
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
    <!-- /.content -->
@endsection