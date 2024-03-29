<x-auth-layout title="Scratchy Nib | Forgot Password">

    <section class="loginform mt-5">
        <div class="row h-100">
            <div class="col-md-6 bg-white">
                <form class="ms-md-3 ms-sm-0" method="POST" action="{{ route('password.store') }}" id="authenticate">
                    @csrf
                    {{-- Password reset token --}}
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
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
                        </ul>
                    </div>

                    <div class="form-floating mt-4 mb-3 me-3 ms-sm-3 ms-md-0">
                        <input type="email" class="form-control" id="email" name="email" autocomplete="username"
                               placeholder="email" value="{{ old('email', $request->email) }}">
                        <label for="email">Email</label>
                        <span><i class="fa-light fa-at"></i></span>
                    </div>

                    <div class="form-floating mb-3 me-3 ms-sm-3 ms-md-0">
                        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password"
                               placeholder="password" value="{{old('password')}}">
                        <label for="password">Password</label>
                        <span><i class="fa-light fa-lock"></i></span>
                    </div>

                    <div class="form-floating me-3 ms-sm-3 ms-md-0">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password"
                               placeholder="password_confirmation" value="{{old('password_confirmation')}}">
                        <label for="password_confirmation">Confirm Password</label>
                        <span><i class="fa-light fa-lock"></i></span>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="auth-btn d-flex align-items-center justify-content-center">
                            Submit
                            <div class="loader-inline" id="loader"></div>
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-md-6 bg-image">
                <div class="m-3 row text-center">
                    <h1 class="mt-5">One more step!</h1>
                </div>

                <div class="mx-3 d-flex flex-column text-center">
                    <p>Fill out the form on the left to reset your password.</p>
                    <a href="{{ route('home.index') }}" class="text-white"><i class="fa-solid fa-right-from-bracket"></i> Back to homepage</a>
                </div>
            </div>
        </div>
    </section>

    <script type="module">
        $(function() {
            $( "form" ).submit(function() {
                $('#loader').show();
                $('#signup-icon').hide();
            });
        });
    </script>

</x-auth-layout>
