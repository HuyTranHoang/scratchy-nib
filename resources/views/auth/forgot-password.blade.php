<x-auth-layout title="Scratchy Nib | Forgot Password">

    <section class="loginform mt-5">
        <div class="row h-100">
            <div class="col-md-6 bg-white">
                <form class="ms-md-3 ms-sm-0" method="POST" action="{{ route('password.email') }}" id="authenticate">
                    @csrf
                    <div class="m-3 row text-center">
                        <h1 class="mt-md-0 mt-lg-5">Reset password</h1>
                    </div>

                    <div class="row text-primary mt-2 me-3 ms-sm-3 ms-md-0">
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

                    <div class="form-floating mt-4 mb-3 me-3 ms-sm-3 ms-md-0">
                        <input type="email" class="form-control" id="email" name="email" autocomplete="username"
                               placeholder="email" value="{{old('email')}}">
                        <label for="email">Email</label>
                        <span><i class="fa-light fa-at"></i></span>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="auth-btn d-flex align-items-center justify-content-center">
                            Send reset link
                            <div class="loader-inline" id="loader"></div>
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-md-6 bg-image">
                <div class="m-3 row text-center">
                    <h1 class="mt-5">Forgot your password?</h1>
                </div>

                <div class="mx-3 d-flex flex-column text-center">
                    <p>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    <a class="auth-btn auth-btn-transparent text-decoration-none text-center w-75 mx-auto mt-5" href="{{route('home.index')}}">Back to home</a>
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
