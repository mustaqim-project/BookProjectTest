<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Book Store Admin Dashboard</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="admin/image/tokobuku.png">
    <link rel="stylesheet" href="admin/assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="admin/image/tokobuku.png" height="100" class='mb-4'>
                                <h3>Sign In</h3>
                                <p>Please sign in to continue to BOOK STORE.</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group position-relative has-icon-left">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <div class="position-relative">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">{{ __('Password') }}</label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="float-right">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="position-relative">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-check clearfix my-4">
                                    <div class="checkbox float-left">
                                        <input type="checkbox" id="remember" class="form-check-input" name="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                    <div class="float-right">
                                        <a href="{{ route('register') }}">{{ __('Don\'t have an account?') }}</a>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <button type="submit"
                                        class="btn btn-primary float-right">{{ __('Login') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="admin/assets/js/feather-icons/feather.min.js"></script>
    <script src="admin/assets/js/app.js"></script>

    <script src="admin/assets/js/main.js"></script>
</body>

</html>
