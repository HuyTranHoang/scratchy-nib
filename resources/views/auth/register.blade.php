<x-auth-layout title="Scratchy Nib | Sign up">
    
    <section class="loginform mt-5">
        <div class="row">
            <div class="col-md-6 bg-image">
                <div class="my-3 row text-center text-primary-color">
                    <h3 class="mt-5">Welcome Back!</h3>
                </div>

                <div class="mx-3 d-flex flex-column">
                    <p>To keep connected with us please login with your personal info</p>
                    <a class="auth-btn auth-btn-transparent text-decoration-none text-center" href="{{ route('login') }}">Sign In</a>
                    <a href="{{ route('home.index') }}" class="text-white"><i class="fa-solid fa-right-from-bracket"></i> Back to homepage</a>
                </div>

            </div>
            <div class="col-md-6">
                <form method="POST" action="{{ route('register') }}" id="authenticate">
                    @csrf
                    <div class="my-3 row text-center text-primary-color">
                        <h3 class="mt-5">Create Account</h3>
                    </div>

                    <div class="row text-primary mx-3">
                        <ul>
                            @if($errors->any())
                                @foreach($errors->getMessages() as $this_error)
                                    <li>{{$this_error[0]}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="form-floating mb-3 mx-3">
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="name" value="{{old('name')}}">
                        <label for="name">Name</label>
                        <span><i class="fa-light fa-user"></i></span>
                    </div>

                    <div class="form-floating mb-3 mx-3">
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="email" value="{{old('email')}}">
                        <label for="email">Email</label>
                        <span><i class="fa-light fa-at"></i></span>
                    </div>

                    <div class="form-floating mb-3 mx-3">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="password" value="{{old('password')}}">
                        <label for="password">Password</label>
                        <span><i class="fa-light fa-lock"></i></span>
                    </div>

                    <div class="form-floating mb-3 mx-3">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                               placeholder="password_confirmation" value="{{old('password_confirmation')}}">
                        <label for="password_confirmation">Confirm Password</label>
                        <span><i class="fa-light fa-lock"></i></span>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="auth-btn d-flex align-items-center justify-content-center">
                            Signup
                            <i class="ps-3 fa-duotone fa-right-to-bracket" id="signup-icon"></i>
                            <div class="loader-inline" id="loader"></div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>




{{--    <div class="lg-container d-none d-lg-block right-panel-active" id="main">--}}
{{--        <div class="sign-up">--}}
{{--            <form method="POST" action="{{ route('register') }}">--}}
{{--                @csrf--}}
{{--                <h1>Create Account</h1>--}}
{{--                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name">--}}
{{--                @error('name')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email">--}}
{{--                @error('email')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <input type="password" id="password" name="password" placeholder="Password" autocomplete="password">--}}
{{--                @error('password')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" autocomplete="password">--}}
{{--                @error('password_confirmation')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <button class="d-flex">Sign up--}}
{{--                    <div class="loader-inline" id="loader"></div>--}}
{{--                </button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="overlay-container">--}}
{{--            <div class="overlay">--}}
{{--                <div class="overlay-left">--}}
{{--                    <h1>Welcome Back!</h1>--}}
{{--                    <p>To keep connected with us please login with your personal info</p>--}}
{{--                    <a href="{{ route('login') }}"><button id="signIn-mobile">Sign In</button></a>--}}
{{--                    <a href="{{ route('home.index') }}" class="text-white"><i class="fa-solid fa-right-from-bracket"></i> Back to homepage</a>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="lg-container d-lg-none right-panel-active position-relative" id="main-mobile">--}}
{{--        <div class="sign-up-mobile">--}}
{{--            <form method="POST" action="{{ route('register') }}" class="pt-5">--}}
{{--                @csrf--}}
{{--                <h1>Create Account</h1>--}}
{{--                <input type="text" id="name-mobile" name="name" value="{{ old('name') }}" placeholder="Name">--}}
{{--                @error('name')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <input type="email" id="email-mobile" name="email" value="{{ old('email') }}" placeholder="Email">--}}
{{--                @error('email')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <input type="password" id="password-mobile" name="password" placeholder="Password" autocomplete="password">--}}
{{--                @error('password')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <input type="password" id="password_confirmation-mobile" name="password_confirmation" placeholder="Confirm Password" autocomplete="password">--}}
{{--                @error('password_confirmation')--}}
{{--                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>--}}
{{--                @enderror--}}
{{--                <button class="d-flex">Sign Up--}}
{{--                    <div class="loader-inline" id="loader-mobile"></div>--}}
{{--                </button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}

    <script type="module">
        $(function() {
            $( "form" ).submit(function() {
                $('#loader').show();
                $('#signup-icon').hide();
            });
        });
    </script>

</x-auth-layout>
