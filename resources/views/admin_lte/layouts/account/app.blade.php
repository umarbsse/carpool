

{{-- head section include the meta tags and css files include --}}
@include(get_private_template_name().'.widgets.account.head')
<body class="hold-transition login-page">

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('home')}}" class="h1"><b>@yield('heading')</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">@yield('one_liner_msg')</p>
                
                {{-- Alert --}}
                @include(get_private_template_name().'.widgets.account.alerts')

                {{-- Main account action Form Handle --}}
                @yield('account_action')

                
                {{-- Connect Social Apps --}}
                @include(get_private_template_name().'.widgets.account.social')

                {{-- Connect Social Apps --}}

                
                @yield('account_other_link')


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    
    {{-- Footer which contains footer and javascript files --}}
    @include(get_private_template_name().'.widgets.account.footer')
</body>
</html>
