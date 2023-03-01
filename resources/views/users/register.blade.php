<x-users.layouts.master>
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="login-wrap p-4 p-md-5  bg-secondary-color border rounded">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign up</h3>
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
                                    <input type="text" class="form-control" required="">
                                    <label class="form-control-placeholder" for="email">E-mail</label>
                                </div>

                                <div class="form-group mt-3 p-1">
                                    <input id="password-field" type="password" class="form-control" required="">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                </div>

                                <div class="form-group mt-3 p-1">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                                </div>

                            </form>
                            <p class="text-center">Have already an account ? <a data-toggle="tab" href="#signup">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-users.partials.overlay-top color="bg-secondary-color"/>
    </section>
</x-users.layouts.master>
