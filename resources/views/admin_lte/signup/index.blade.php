@extends(get_private_template_name().'.layouts.account.app')
@section('heading', $headline)
@section('one_liner_msg', $one_liner_msg)


@section('account_action')
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
@endsection

@section('account_other_link')


      <a href="{{route('login')}}" class="text-center">I already have a membership</a>
@endsection
