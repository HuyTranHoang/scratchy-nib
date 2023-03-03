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
    <div class="lg-container d-none d-lg-block" id="main">
        <div class="sign-up">
            <form action="">
                <h1>Create Account</h1>
                <input type="text" name="=username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>

        <div class="sign-in">
            <form action="">
                <h1>Sign in</h1>
                <input type="text" name="=email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="">Forget your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="signIn">Sign In</button>
                </div>
                <div class="overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


    <div class="lg-container d-lg-none" id="main-mobile">
        <div class="sign-up-mobile">
            <form action="" class="mb-5">
                <h1 class="mt-3">Create Account</h1>
                <input type="text" name="=username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>

        <div class="sign-in-mobile">
            <form action="">
                <h1 class="mt-3">Sign in</h1>
                <input type="text" name="=email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="">Forget your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container-mobile">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="signIn-mobile" class="border-white border-1">Sign In</button>
                </div>
                <div class="overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button id="signUp-mobile" class="border-white border-1">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click', () =>{
            main.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () =>{
            main.classList.remove("right-panel-active");
        });

        const signUpButtonMobile = document.getElementById('signUp-mobile');
        const signInButtonMobile = document.getElementById('signIn-mobile');
        const mainMobile = document.getElementById('main-mobile');

        signUpButtonMobile.addEventListener('click', () =>{
            mainMobile.classList.add("right-panel-active");
        });
        signInButtonMobile.addEventListener('click', () =>{
            mainMobile.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>

