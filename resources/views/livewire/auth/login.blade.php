<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="shortcut icon" href="{{asset('/admin/assets/images/Favicon.png')}}">
    <link href="{{asset('/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/assets/css/icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/assets/css/custom.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.js"></script>
</head>

<body>



    <div class="account-pages">
        {{-- <img src="admin/assets/images/auth/auth_bg.jpg" alt="auth_bg" class="auth-bg light">
        <img src="{{asset('/admin/assets/images/auth/auth_bg_dark.jpg')}}" alt="auth_bg_dark" class="auth-bg dark"> --}}
        <div class="container">
            <div class="justify-content-center row gy-0">

                <div class="col-lg-6 auth-banners">
                    <div class="bg-login card card-body m-0 h-100 border-0">
                        <img src="{{asset('/admin/assets/images/auth/bg-img-2.png')}}" class="img-fluid auth-banner"
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
                            <h4 class="fw-normal">Welcome to <span class="fw-bold text-primary" style="color: #d1143e !important;">MIU</span></h4>
                            <p class="text-muted mb-0">Please enter your information to access your account.</p>
                        </div>                    
                            <!-- Session Status -->
                            <x-auth-session-status class="text-center" :status="session('status')" />

                            <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
                                @csrf

                                <div class="mb-4">
                                    <label class="form-label" for="login-email" value="{{ __('Email') }}">Email /
                                        Employee
                                        ID<span class="text-danger ms-1">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="ri-mail-line"></i></span>
                                        <input type="text" class="form-control" id="email" name="email"
                                            :value="old('email')" placeholder="Enter your email or ID">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="LoginPassword"
                                        value="{{ __('Password') }}">Password<span
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
                                </div>
                                <x-button type="submit" class="btn w-100 shadow-sm rounded-2" style="
        background: #d1143e !important;
        border: none !important;
        color: #fff !important;
        /* height: 48px; */
        /* font-weight: 600; */
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    ">
                                    <i class="ri-login-circle-line"></i>
                                    {{ __('Log in') }}
                                </x-button>





                                {{-- <flux:button variant="primary" type="submit" class="w-full"
                                    data-test="login-button">
                                    {{ __('Log in') }}
                                </flux:button> --}}


                                {{--
                                <!-- 💡 Student Query Button -->
                                <div class="text-center mt-3">
                                    <a href="{{ route('students.query') }}"
                                        class="btn btn-outline-primary w-100 shadow-sm rounded-2">
                                        <i class="ri-question-line me-2"></i> Student Query
                                    </a>
                                </div> --}}







                                <p class="mt-4 text-muted text-center fs-12">
                                  © {{ date('Y') }} Manipur International University. All Rights Reserved.
                                </p>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{asset('/admin/assets/js/bootstrap.bundle.min.js')}}"></script>

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
