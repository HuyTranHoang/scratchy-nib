<x-layouts.master>
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="login-wrap p-4 p-md-5  bg-secondary-color border rounded">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href=""><i class="fa-brands fa-facebook-f p-1"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter p-1"></i></a>
                                    </p>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mt-3 p-1">
                                    <input type="text" class="form-control" required="">
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
                                <div class="form-group mt-3 p-1">
                                    <input id="password-field" type="password" class="form-control" required="">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                </div>
                                <div class="form-group mt-3 p-1">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex p-1">
                                    <div class="w-50 text-left p-1">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right p-1">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-partials.overlay-top color="bg-secondary-color"/>
    </section>
</x-layouts.master>
