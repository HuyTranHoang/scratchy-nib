<x-home-layout title="Scratchy Nib | Contact">

    <x-home.title-section>
        Contact
    </x-home.title-section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 text-primary-color bg-secondary-color rounded">
                    <div class="p-4">
                        <h4 class="text-uppercase text-primary"><i class="fa-light fa-message-question"></i> Have Questions?</h4>
                        <p>Simply fill the form below, and we will try our best to get back to you as soon as possible.</p>
                        <div>
                            <form action="{{route('send-email')}}" method="POST">
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-md-12 col-lg-6">
                                        <label for="name" class="mb-2">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 col-lg-6 mt-md-3 mb-md-2 my-lg-0">
                                        <label for="email" class="mb-2">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="subject" class="mb-2">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" value="{{ old('subject') }}">
                                        @error('subject')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="message" class="mb-2">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control">
                                            {{ old('message') }}
                                        </textarea>
                                        @error('message')
                                        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="d-flex justify-content-center">
                                    <button class="auth-btn d-flex align-items-center justify-content-center">
                                        Submit
                                        <div class="loader-inline" id="loader"></div>
                                    </button>
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
                            <span>Ho Chi Minh, Viet Nam</span>
                            <span><a class="link-secondary text-decoration-none" href="mailto: scratchynib@gmail.com">scratchynib@gmail.com</a></span>
                            <span><a class="link-secondary text-decoration-none" href="tel:+8499999999">+84 999 999 99</a></span>
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
