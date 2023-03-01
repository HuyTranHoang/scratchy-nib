<x-users.layouts.master>
    <section class="bg-secondary-color">
        <div class="container mt-5" id="loginForm">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mt-3">
                                    <input id="email" name="email" type="text" class="form-control" required="">
                                    <label class="form-control-placeholder" for="email">Email</label>
                                </div>
                                <div class="form-group mt-5">
                                    <input id="password" name="password" type="password" class="form-control" required="">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group">
                                    <div class="text-end">
                                        <a class="text-decoration-none" href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="{{route('home.register')}}">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-users.partials.overlay-top color="bg-secondary-color"/>
    </section>
</x-users.layouts.master>
