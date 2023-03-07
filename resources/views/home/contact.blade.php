<x-home-layout>
    <section class="bg-secondary-color">
        <div class="row m-0">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary mt-5">Contact</h1>
            </div>
        </div>
        <x-home.overlay-bottom />
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 text-primary-color bg-secondary-color rounded">
                    <div class="p-4">
                        <h4 class="text-uppercase text-primary"><i class="fa-light fa-message-question"></i> Have Questions?</h4>
                        <p>Simply fill the form below, and we will try our best to get back to you as soon as possible =]</p>
                        <div>
                            <form action="{{route('send-email')}}" method="POST">
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-md-12 col-lg-6">
                                        <label for="name" class="mb-2">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                        @error('name')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 col-lg-6 mt-md-3 mb-md-2 my-lg-0">
                                        <label for="email" class="mb-2">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                        @error('email')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="subject" class="mb-2">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        @error('subject')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="message" class="mb-2">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control"></textarea>
                                        @error('message')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3">
                                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                                    </div>
                                    <div class="d-flex mt-3 justify-content-center">
                                        <div class="loader" id="loader"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm12 mt-md-0 mt-sm-4 text-primary-color text-center">
                    <div class="p-5">
                        <div class="row">
                            <h4 class="text-primary">Get in touch</h4>
                            <p>We are here to help, just let us know if you are having any issues, and we will do our best to get back to you as fast as we can. Just fill out the form below.</p>
                            <span>Would you prefer to send happy mail?</span>
                        </div>
                        <div class="row mt-4">
                            <h5 class="text-primary">Scratchy Nib</h5>
                            <span>
                                Ho Chi Minh <br>
                                Viet Nam
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-home.overlay-top color="bg-secondary-color"/>
    </section>

    <script type="module">
        $(function() {
            $( "form" ).submit(function() {
                $('#loader').show();
            });
        });
    </script>

</x-home-layout>
