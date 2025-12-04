@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- Input addon -->
            <form method="POST" action="{{ route('update_setting') }}">
              @csrf
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Location Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  value="" placeholder="Enter First name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Lat</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  value="" placeholder="Enter First name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">District, Province</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  value="" placeholder="Enter First name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Lang</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  value="" placeholder="Enter First name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add Location</button>
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