<x-auth-layout title="Scratchy Nib | Sign up">

    <div class="lg-container d-none d-lg-block right-panel-active" id="main">
        <div class="sign-up">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Create Account</h1>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name">
                @error('name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                @error('email')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input type="password" id="password" name="password" placeholder="Password" autocomplete="password">
                @error('password')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" autocomplete="password">
                @error('password_confirmation')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <button class="d-flex">Sign up
                    <div class="loader-inline" id="loader"></div>
                </button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <a href="{{ route('login') }}"><button id="signIn-mobile">Sign In</button></a>
                    <a href="{{ route('home.index') }}" class="text-white"><i class="fa-solid fa-right-from-bracket"></i> Back to homepage</a>

                </div>
            </div>
        </div>
    </div>


    <div class="lg-container d-lg-none right-panel-active position-relative" id="main-mobile">
        <div class="sign-up-mobile">
            <form method="POST" action="{{ route('register') }}" class="pt-5">
                @csrf
                <h1>Create Account</h1>
                <input type="text" id="name-mobile" name="name" value="{{ old('name') }}" placeholder="Name">
                @error('name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input type="email" id="email-mobile" name="email" value="{{ old('email') }}" placeholder="Email">
                @error('email')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input type="password" id="password-mobile" name="password" placeholder="Password" autocomplete="password">
                @error('password')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <input type="password" id="password_confirmation-mobile" name="password_confirmation" placeholder="Confirm Password" autocomplete="password">
                @error('password_confirmation')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <button class="d-flex">Sign Up
                    <div class="loader-inline" id="loader-mobile"></div>
                </button>
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

    <script type="module">
        $(function() {
            $( "form" ).submit(function() {
                $('#loader').show();
            });
        });
    </script>

</x-auth-layout>
