<x-auth-layout title="Scratchy Nib | Sign up">

    <section class="loginform mt-5" style="height: auto;">
        <div class="row h-100">
            <div class="col-md-6 bg-image">
                <div class="m-3 row text-center">
                    <h1 class="mt-5">Welcome Back!</h1>
                </div>

                <div class="mx-3 d-flex flex-column text-center">
                    <p>To keep connected with us please login with your personal info</p>
                    <a class="auth-btn auth-btn-transparent text-decoration-none text-center w-75 mx-auto mt-5" href="{{ route('login') }}">Sign In</a>
                    <a href="{{ route('home.index') }}" class="text-white"><i class="fa-solid fa-right-from-bracket"></i> Back to homepage</a>
                </div>

            </div>
            <div class="col-md-6 bg-white">
                <form method="POST" action="{{ route('register') }}" id="authenticate">
                    @csrf
                    <div class="m-3 row text-center">
                        <h1 class="mt-md-5">Create Account</h1>
                    </div>

                    <div class="row text-primary me-3 ms-3 ms-md-0">
                        <ul>
                            @if($errors->any())
                                @foreach($errors->getMessages() as $this_error)
                                    <li>{{$this_error[0]}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="form-floating mb-3 me-3 ms-3 ms-md-0">
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="name" value="{{old('name')}}">
                        <label for="name">Name</label>
                        <span><i class="fa-light fa-user"></i></span>
                    </div>

                    <div class="form-floating mb-3 me-3 ms-3 ms-md-0">
                        <input type="email" class="form-control" id="email" name="email" autocomplete="username"
                               placeholder="email" value="{{old('email')}}">
                        <label for="email">Email</label>
                        <span><i class="fa-light fa-at"></i></span>
                    </div>

                    <div class="form-floating mb-3 me-3 ms-3 ms-md-0">
                        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password"
                               placeholder="password" value="{{old('password')}}">
                        <label for="password">Password</label>
                        <span><i class="fa-light fa-lock"></i></span>
                    </div>

                    <div class="form-floating me-3 ms-3 ms-md-0">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password"
                               placeholder="password_confirmation" value="{{old('password_confirmation')}}">
                        <label for="password_confirmation">Confirm Password</label>
                        <span><i class="fa-light fa-lock"></i></span>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="auth-btn d-flex align-items-center justify-content-center">
                            Sign up
                            <div class="loader-inline" id="loader"></div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="module">
        $(function() {
            $( "form" ).submit(function() {
                $('#loader').show();
            });
        });
    </script>

</x-auth-layout>
