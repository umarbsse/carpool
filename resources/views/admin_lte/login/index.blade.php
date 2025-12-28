@extends(get_private_template_name().'.layouts.account.app')
@section('heading', $headline)
@section('one_liner_msg', $one_liner_msg)


@section('account_action')
<form method="POST" action="{{ route('auth') }}">
    @csrf
                    <div class="input-group mb-3">
                    <input type="text" name="login" class="form-control" value="{{ old('login') }}" placeholder="Enter email, mobile, or CNIC">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control"  placeholder="Enter your password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" value="d" name="user_type">
                                    <label for="radioPrimary1">DRIVER</label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" value="p" name="user_type">
                                    <label for="radioPrimary2">PASSENGER</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
@endsection

@section('account_other_link')

<p class="mb-1">
                    <a href="{{route('forgotpassword')}}">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{route('signup')}}" class="text-center">Register a new membership</a>
                </p>
@endsection
