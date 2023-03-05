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
<div class="lg-container d-none d-lg-block right-panel-active" id="main">
    <div class="sign-up">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <input type="text" id="name" name="name" placeholder="Name">
            @error('name')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <input type="email" id="email" name="email" placeholder="Email">
            @error('email')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <input type="password" id="password" name="password" placeholder="Password">
            @error('password')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
            @error('password_confirmation')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <button>Sign Up</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <a href="{{ route('login') }}"><button id="signIn-mobile">Sign In</button></a>
            </div>
        </div>
    </div>
</div>


<div class="lg-container d-lg-none right-panel-active position-relative" id="main-mobile">
    <div class="sign-up-mobile">
        <form method="POST" action="{{ route('register') }}" class="pt-5">
            @csrf
            <h1>Create Account</h1>
            <input type="text" id="name" name="name" placeholder="Name">
            @error('name')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <input type="email" id="email" name="email" placeholder="Email">
            @error('email')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <input type="password" id="password" name="password" placeholder="Password">
            @error('password')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
            @error('password_confirmation')
            <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @enderror
            <button>Sign Up</button>
        </form>
    </div>

    <div class="overlay-container-mobile" style="top:25%; height: 41%">
        <div class="overlay">
            <div class="overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <a href="{{ route('login') }}"><button id="signIn-mobile">Sign In</button></a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

