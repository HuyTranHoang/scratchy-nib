<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scratchy Nib | Login</title>
    @vite(['resources/sass/app.scss'])
</head>
<body class="container d-flex justify-content-center align-items-center">
<div class="lg-container" id="main">
    <div class="sign-in">
        <!-- Session Status -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <span class="text-danger">{{session('status')}}</span>
            <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <button>Submit</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-right">
                <h1>Forgot your password?</h1>
                <p>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                <a href=" {{route('home.index')}} "><button id="signUp">Back to home</button></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

