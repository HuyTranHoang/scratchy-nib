<x-auth-layout title="Scratchy Nib | Forgot Password">

    <div class="lg-container" id="main">
        <div class="sign-in"><!-- Session Status -->
            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <span class="text-danger">{{session('status')}}</span>

                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email', $request->email) }}">
                @error('email')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <input id="password" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @error('password')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <button style="padding: 12px 24px">Reset Password</button>

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

</x-auth-layout>
