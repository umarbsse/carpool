<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .required::after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="width: 420px; border-radius: 12px;">
        <h3 class="text-center mb-4">{{ $title }}</h3>
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
        <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
            @csrf

            <!-- First Name / Last Name -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label required">First Name</label>
                    <input type="text" name="first_name" 
                        class="form-control @error('first_name') is-invalid @enderror" 
                        value="{{ old('first_name') }}" placeholder="Enter first name" required>
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label class="form-label required">Last Name</label>
                    <input type="text" name="last_name" 
                        class="form-control @error('last_name') is-invalid @enderror" 
                        value="{{ old('last_name') }}" placeholder="Enter last name" required>
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- CNIC -->
            <div class="mb-3">
                <label class="form-label required">CNIC</label>
                <input type="text" name="cnic" 
                    class="form-control @error('cnic') is-invalid @enderror" 
                    value="{{ old('cnic') }}" placeholder="12345-1234567-1" required>
                @error('cnic')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Mobile -->
            <div class="mb-3">
                <label class="form-label required">Mobile</label>
                <input type="text" name="mobile" 
                    class="form-control @error('mobile') is-invalid @enderror" 
                    value="{{ old('mobile') }}" placeholder="0300-1234567" required>
                @error('mobile')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label required">Email</label>
                <input type="email" name="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    value="{{ old('email') }}" placeholder="example@gmail.com" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label required">Password</label>
                <input type="password" name="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    placeholder="Enter password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label required">Confirm Password</label>
                <input type="password" name="password_confirmation" 
                    class="form-control" placeholder="Re-enter password" required>
            </div>

            <button class="btn btn-primary w-100" type="submit">Create Account</button>
        </form>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Bootstrap form validation
    (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

</body>
</html>
