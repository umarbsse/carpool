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
                  <h3 class="card-title">Change your account setting</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">First Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  value="{{$myaccount['first_name']}}" placeholder="Enter First name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Email</label>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ $myaccount['email'] }}" placeholder="Enter email">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">CNIC</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="cnic" class="form-control @error('cnic') is-invalid @enderror" value="{{ $myaccount['cnic'] }}" placeholder="Enter CNIC">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">Last Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{$myaccount['last_name']}}" placeholder="Enter Last name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Mobile</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="mobile" class="form-control  @error('mobile') is-invalid @enderror" value="{{$myaccount['mobile']}}" placeholder="Enter Mobile Number">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Role</label>
                                <div class="input-group mb-3">
                                    <input type="text" readonly class="form-control"  value="{{$myaccount['role']}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Setting</button>
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