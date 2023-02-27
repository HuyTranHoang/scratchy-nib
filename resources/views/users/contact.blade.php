<x-layouts.master>
    <section class="bg-secondary-color">
        <div class="row m-0">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary mt-5">Contact</h1>
            </div>
        </div>
        <x-partials.overlay-bottom />
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 text-primary-color bg-secondary-color rounded">
                    <div class="p-5">
                        <h4 class="text-uppercase text-primary"><i class="fa-regular fa-message-question"></i> Have Questions?</h4>
                        <p>Simply fill the form below, and we will try our best to get back to you as soon as possible =]</p>
                        <div>
                            <form id="contact-form" name="contact-form" action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">Your name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Your email</label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="subject" class="">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <label for="message">Your message</label>
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center text-md-left mt-3">
                                    <input type="submit" class="btn btn-primary-color">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm12 mt-md-0 mt-sm-4 text-primary-color text-center">
                    <div class="p-5">
                        <div class="row">
                            <h4 class="text-uppercase text-primary">Contact Us</h4>
                            <p>We are here to help, just let us know if you are having any issues, and we will do our best to get back to you as fast as we can. Just fill out the form below.</p>
                            <p>Would you prefer to send happy mail?</p>
                        </div>
                        <div class="row mt-4">
                            <h5 class="text-uppercase text-primary">Scratchy Nib</h5>
                            <p>
                                Ho Chi Minh <br>
                                Viet Nam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-partials.overlay-top color="bg-secondary-color"/>
    </section>
</x-layouts.master>
