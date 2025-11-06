<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Studio | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/admin/assets/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/assets/css/app.min.css') }}" rel="stylesheet">
</head>
<body class="pace-top">
    <div id="app" class="app">
        <div class="login">
            <div class="login-content">
                <form action="{{ route('admin.index') }}" method="GET">
                    <h1 class="text-center">Sign In</h1>
                    <div class="text-body text-opacity-50 text-center mb-4">
                        For your protection, please verify your identity.
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="username@address.com" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Enter your password" />
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                    <div class="text-center text-body text-opacity-50">
                        Don't have an account yet? <a href="#">Sign up</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('assets/admin/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/app.min.js') }}"></script>
</body>
</html>
