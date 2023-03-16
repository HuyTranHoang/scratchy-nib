<x-auth-layout title="Scratchy Nib | Sign in">

    <section class="loginform mt-5">
        <div class="row h-100">
            <div class="col-md-6 bg-white">
                <form class="ms-md-3 ms-sm-0" method="POST" action="{{ route('login') }}" id="authenticate">
                    @csrf
                    <div class="m-3 row text-center">
                        <h1 class="mt-md-0 mt-lg-5">Sign In</h1>
                    </div>

                    <div class="row text-primary mt-2 me-3 ms-3 ms-md-0">
                        <ul>
                            @if($errors->any())
                                @foreach($errors->getMessages() as $this_error)
                                    <li>{{$this_error[0]}}</li>
                                @endforeach
                            @endif
                            @if(session('status'))
                                <li class="text-success">{{session('status')}}</li>
                            @endif
                        </ul>
                    </div>

                    <div class="form-floating mt-4 mb-3 me-3 ms-3 ms-md-0">
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

                    <div class="text-center">
                        <a class="text-primary text-center" href="{{ route('password.request') }}">Forget your Password?</a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="auth-btn d-flex align-items-center justify-content-center">
                            Sign in
                            <div class="loader-inline" id="loader"></div>
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-md-6 bg-image">
                <div class="m-3 row text-center">
                    <h1 class="mt-5">Hello, Friend!</h1>
                </div>

                <div class="mx-3 d-flex flex-column text-center">
                    <p>Enter your personal details and start journey with us</p>
                    <a class="auth-btn auth-btn-transparent text-decoration-none text-center w-75 mx-auto mt-5" href="{{route('register')}}">Sign Up</a>
                    <a href="{{ route('home.index') }}" class="text-white"><i class="fa-solid fa-right-from-bracket"></i> Back to homepage</a>
                </div>

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
