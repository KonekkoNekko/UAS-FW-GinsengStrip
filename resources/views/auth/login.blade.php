<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a href="{{ url('/') }}" class="bi bi-arrow-left bi-3x" style="padding-left: 20px; color: dark; font-weight: bold; font-size: 1.5rem;">
        </a>
      </nav>
<div class="container text-center" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-5">

                <div class="box bg-dark" style="font-size: 13rem;">
                    <i class="bi bi-amd" style="color: white;"></i>
                </div>
                <div class="box bg-secondary" style="margin-bottom: 20px">
                    <div class="row mb-3" style="align-items: center; justify-content: center; text-align: center;">
                    <h1 style="margin:10px; font-weight: bold; color: white; font-size: 30px;">Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3" style="align-items: center; justify-content: center; text-align: center;">
                            <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username or Email">

                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>


                        <div class="row mb-3" style="align-items: center; justify-content: center; text-align: center;">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="align-items: center; justify-content: center; text-align: center;">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" style="width: 12rem;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>
