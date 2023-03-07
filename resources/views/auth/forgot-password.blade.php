<x-auth-layout title="Scratchy Nib | Forgot Password">

    <div class="lg-container" id="main">
        <div class="sign-in"><!-- Session Status -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <span class="text-danger">{{session('status')}}</span>
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror
                <button class="d-flex">Submit
                    <div class="loader-inline" id="loader"></div>
                </button>
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

    <script type="module">
        $(function() {
            $( "form" ).submit(function() {
                $('#loader').show();
            });
        });
    </script>

</x-auth-layout>
