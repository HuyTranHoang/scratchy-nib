<x-auth-layout title="Scratchy Nib | Sign in">


    <div class="lg-container d-none d-lg-block" id="main">
        <div class="sign-in">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Sign in</h1>
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input id="password" type="password" name="password" placeholder="Password">
                @error('password')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <a href="{{ route('password.request') }}">Forget your Password?</a>
                <button>Sign In</button>
                <span class="text-danger">{{ session('status') }}</span>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <a href=" {{route('register')}} "><button id="signUp">Sign Up</button></a>
                    <a href="{{ route('home.index') }}" class="text-white"><i class="fa-solid fa-right-from-bracket"></i> Back to homepage</a>
                </div>
            </div>
        </div>
    </div>

    <div class="lg-container d-lg-none" id="main-mobile" style="display: flex; align-items: flex-end;">

        <div class="sign-in-mobile">
            <form method="POST" action="{{ route('login') }}" class="mb-5">
                @csrf
                <h1>Sign in</h1>
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input id="password" type="password" name="password" placeholder="Password">
                @error('password')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <a href="{{ route('password.request') }}">Forget your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container-mobile">
            <div class="overlay">
                <div class="overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <a href=" {{route('register')}} "><button id="signUp">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>

</x-auth-layout>
