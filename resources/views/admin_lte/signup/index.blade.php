
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>
<style>
    .invalid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
}
</style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset(get_private_template_name().'/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset(get_private_template_name().'/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset(get_private_template_name().'/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>
      {{-- 
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Fix bellow errors:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        --}}
      <form method="POST" action="{{ route('register') }}" >
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="first_name" class="form-control  @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="Enter First name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('first_name')
                <span class="success invalid-feedback" style="display:block;">{{ $message }}</span>
            @enderror
          
        </div>
        <div class="input-group mb-3">
          <input type="text" name="last_name" class="form-control  @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Enter Last name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('last_name')
                <span class="success invalid-feedback" style="display:block;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" name="cnic" class="form-control  @error('cnic') is-invalid @enderror" value="{{ old('cnic') }}" placeholder="Enter CNIC">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('cnic')
                <span class="success invalid-feedback" style="display:block;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" name="mobile" class="form-control  @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" placeholder="Enter Mobile Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('mobile')
                <span class="success invalid-feedback" style="display:block;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('email')
                <span class="success invalid-feedback" style="display:block;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('password')
                <span class="success invalid-feedback" style="display:block;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('password_confirmation')
                <span class="success invalid-feedback" style="display:block;">{{ $message }}</span>
            @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="{{route('login')}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset(get_private_template_name().'/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset(get_private_template_name().'/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset(get_private_template_name().'/dist/js/adminlte.min.js') }}"></script>
</body>
</html>