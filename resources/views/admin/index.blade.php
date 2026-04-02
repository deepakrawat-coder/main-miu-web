<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="shortcut icon" href="admin/assets/images/Favicon.png">
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/assets/css/icons.min.css" rel="stylesheet">
    <link href="admin/assets/css/app.min.css" rel="stylesheet">
    <link href="admin/assets/css/custom.min.css" rel="stylesheet">
</head>

<body>

    {{-- <div class="account-pages">
        <img src="admin/assets/images/auth/auth_bg.jpeg" class="auth-bg light">
        <div class="container">
            <div class="row justify-content-center">

                <!-- LEFT SIDE BANNER -->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="admin/assets/images/auth/bg-img-2.png" class="img-fluid h-100">
                    </div>
                </div>

                <!-- LOGIN FORM -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm d-flex justify-content-center">
                        <div class="card-body">

                            <div class="text-center mb-4">
                                <img src="uploads/theme/default-logo.png" style="height:80px;">
                                <h5 class="mt-3 text-primary fw-bold">Academic ERP Login</h5>
                                <p class="text-muted">Enter your credentials to continue</p>
                            </div>

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Email / Employee ID</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ri-mail-line"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter email">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ri-lock-line"></i></span>
                                        <input type="password" class="form-control" id="password">
                                        <span class="input-group-text toggle-password" style="cursor:pointer;">
                                            <i class="ri-eye-off-line"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">Remember me</label>
                                </div>

                                <button type="button" class="btn btn-primary w-100">
                                    <i class="ri-login-circle-line me-1"></i> Sign In
                                </button>

                                <p class="text-center mt-4 text-muted fs-12">
                                    © 2025 Academic ERP
                                </p>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <div class="account-pages">
        {{-- <img src="admin/assets/images/auth/auth_bg.jpg" alt="auth_bg" class="auth-bg light">
        <img src="admin/assets/images/auth/auth_bg_dark.jpg" alt="auth_bg_dark" class="auth-bg dark"> --}}
        <div class="container">
            <div class="justify-content-center row gy-0">

                <div class="col-lg-6 auth-banners">
                    <div class="bg-login card card-body m-0 h-100 border-0">
                        <img src="admin/assets/images/auth/bg-img-2.png" class="img-fluid auth-banner"
                            alt="auth-banner">
                        <div class="auth-contain">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="text-center text-white my-4 p-4">
                                            <h3 class="text-white">Learn and Practice</h3>
                                            <p class="mt-3">Manage your application seamlessly. Log in to access your
                                                dashboard and configure settings.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="text-center text-white my-4 p-4">
                                            <h3 class="text-white">Secure Your Data</h3>
                                            <p class="mt-3">Ensure your application remains secure. Utilize our tools to
                                                monitor and protect your data effectively.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="text-center text-white my-4 p-4">
                                            <h3 class="text-white">User Management</h3>
                                            <p class="mt-3">Easily manage users, roles, and permissions. Streamline your
                                                admin tasks with our intuitive interface.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="auth-box card card-body m-0 h-100 border-0 justify-content-center">
                        <div class="mb-5 text-center">
                            <h4 class="fw-normal">Welcome to <span class="fw-bold text-primary">MIU</span></h4>
                            <p class="text-muted mb-0">Please enter your information to access your account.</p>
                        </div>
                        {{-- <form class="form-custom mt-10"> --}}

                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach



                            {{-- <form class="form-custom mt-10" action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="mb-5">
                                    <label class="form-label" for="login-email">Email<span
                                            class="text-danger ms-1">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="login-email"
                                        placeholder="Enter your email">
                                </div>

                                <div class="mb-5">
                                    <label class="form-label" for="LoginPassword">Password<span
                                            class="text-danger ms-1">*</span></label>
                                    <div class="input-group">
                                        <input type="password" id="LoginPassword" class="form-control" name="password"
                                            placeholder="Enter your password" data-visible="false">
                                        <a class="input-group-text bg-transparent toggle-password" href="javascript:;"
                                            data-target="password">
                                            <i class="ri-eye-off-line text-muted toggle-icon"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-sm d-flex align-items-center gap-2 mb-0">
                                            <input class="form-check-input" type="checkbox" value="remember-me"
                                                id="remember-me">
                                            <label class="form-check-label" for="remember-me">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <a href="auth-reset-password.html" class="col-sm-6 text-end">
                                        <span class="fs-14 text-muted">
                                            Forgot your password?
                                        </span>
                                    </a>
                                </div>

                                <a href="index.html">
                                    <button type="button" class="btn btn-primary rounded-2 w-100 btn-loader">
                                        <span class="indicator-label">
                                            Sign In
                                        </span>
                                        <span class="indicator-progress flex gap-2 justify-content-center w-100">
                                            <span>Please Wait...</span>
                                            <i class="ri-loader-2-fill"></i>
                                        </span>
                                    </button>
                                </a>
                                <div class="center-hr my-10 text-nowrap text-muted">Or with email</div>

                                <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                                    <button type="button" class="btn btn-outline-facebook icon-btn">
                                        <i class="ri-facebook-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-google icon-btn">
                                        <i class="ri-google-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-twitter icon-btn">
                                        <i class="ri-twitter-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-instagram icon-btn">
                                        <i class="ri-instagram-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 mt-5 text-muted text-center">
                                    Don't have an account ?
                                    <a href="auth-signup.html"
                                        class="text-primary fw-medium text-decoraton-underline ms-1">
                                        Sign up
                                    </a>
                                </p>
                            </form> --}}

                             <form class="form-custom mt-10" action="{{ route('login.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label" for="login-email" value="{{ __('Email') }}">Email / Employee
                                    ID<span class="text-danger ms-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="ri-mail-line"></i></span>
                                    <input type="text" class="form-control" id="email" name="email"
                                        :value="old('email')" placeholder="Enter your email or ID">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="LoginPassword" value="{{ __('Password') }}">Password<span
                                        class="text-danger ms-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="ri-lock-line"></i></span>
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Enter your password">
                                    <a class="input-group-text bg-transparent toggle-password" href="javascript:;"
                                        data-target="password">
                                        <i class="ri-eye-off-line text-muted toggle-icon"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <div class="form-check form-check-sm d-flex align-items-center gap-2 mb-0">
                                        <input class="form-check-input" type="checkbox" id="remember-me"
                                            name="remember">
                                        <label class="form-check-label" for="remember-me"
                                            value="{{ __('Remember me') }}">Remember me</label>
                                    </div>
                                </div>
                                {{-- <a href="auth-reset-password.html" class="col-sm-6 text-end">
                                    <span class="fs-14 text-muted">Forgot password?</span>
                                </a> --}}
                            </div>

                            {{-- <button type="submit" class="btn btn-primary w-100 shadow-sm rounded-2">
                                <i class="ri-login-circle-line me-2"></i> Sign In
                            </button> --}}

                            <x-button class="btn w-100 shadow-sm rounded-2"
                                style="background: linear-gradient(90deg, #0062ff, #00a6fb) !important; border: none !important; color: #fff !important;">
                                <i class="ri-login-circle-line me-2"></i>
                                {{ __('Log in') }}
                            </x-button>


                            {{--
                            <!-- 💡 Student Query Button -->
                            <div class="text-center mt-3">
                                <a href="{{ route('students.query') }}"
                                    class="btn btn-outline-primary w-100 shadow-sm rounded-2">
                                    <i class="ri-question-line me-2"></i> Student Query
                                </a>
                            </div> --}}







                            <p class="mt-4 text-muted text-center fs-12">
                                © 2026 Admin Panel | Authorized Access Only
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector('.toggle-password').addEventListener('click', function () {
        const input = document.getElementById('password');
        const icon = this.querySelector('i');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('ri-eye-off-line', 'ri-eye-line');
        } else {
            input.type = 'password';
            icon.classList.replace('ri-eye-line', 'ri-eye-off-line');
        }
    });
    </script>

</body>

</html>
