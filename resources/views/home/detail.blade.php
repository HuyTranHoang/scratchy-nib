<x-home-layout>
    <header class="bg-secondary-color">
        <x-home.overlay-bottom />
    </header>
    <div class="container detail">
        <div class="row">
            <div class="col-md-5 bg-secondary-color p-0">
                    <a href="{{ asset('storage/'.$calligraphy -> galleryImage -> first() -> image_name) }}" data-lightbox="detail">
                        <img class="img-size rounded" src="{{asset('storage/'.$calligraphy -> galleryImage -> first() -> image_name)}}" alt="error">
                    </a>
            </div>


            <div class="col-md-7 bg-secondary-color rounded">
                <div class="my-3">
                    <h1 class="text-primary">{{ $calligraphy -> calligraphy_name }}</h1>
                </div>

                <div class="categories fw-bold mt-3">
                    <h4>CATEGORY: <small class="text-primary-color">{{ $calligraphy -> calligraphyStyle -> calligraphyCategory -> category_name }}</small></h4>
                    <h4>STYLE: <small class="text-primary-color">{{ $calligraphy -> calligraphyStyle -> style_name  }}</small></h4>
                </div>

                <div class="fw-semibold mt-3">
                    Author:
                </div>

                <div class="fw-semibold mt-3">
                    Upload date: <span class="text-primary-color">{{ date('d-m-Y', strtotime($calligraphy -> created_at)) }}</span>

                </div>

                <h4 class="mt-3">DESCRIPTION: </h4>
                <p class="description text-primary-color"> {{ $calligraphy -> calligraphy_description }}</p>
            </div>
        </div>
    </div>

        <section class="container">
            <hr>
            <p class="display-5">You may also like</p>
                <div class="row row-cols-md-6 row-cols-sm-4 g-4">

                    <div class="col-sm-4 col-md">
                        <a href="#" class="card text-decoration-none">
                            <img class="card-img-top img-fit" src="https://api.lorem.space/image/book"  alt="Error"/>
                            <div class="card-body">
                                <h6 class="card-title text-primary-color">Name</h6>
                                <p class="card-text text-primary-color">Category</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4 col-md">
                        <a href="#" class="card text-decoration-none">
                            <img class="card-img-top img-fit" src="https://api.lorem.space/image/book"  alt="Error"/>
                            <div class="card-body">
                                <h6 class="card-title text-primary-color">Name</h6>
                                <p class="card-text text-primary-color">Category</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4 col-md">
                        <a href="#" class="card text-decoration-none">
                            <img class="card-img-top img-fit" src="https://api.lorem.space/image/book"  alt="Error"/>
                            <div class="card-body">
                                <h6 class="card-title text-primary-color">Name</h6>
                                <p class="card-text text-primary-color">Category</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4 col-md">
                        <a href="#" class="card text-decoration-none">
                            <img class="card-img-top img-fit" src="https://api.lorem.space/image/book"  alt="Error"/>
                            <div class="card-body">
                                <h6 class="card-title text-primary-color">Name</h6>
                                <p class="card-text text-primary-color">Category</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4 col-md">
                        <a href="#" class="card text-decoration-none">
                            <img class="card-img-top img-fit" src="https://api.lorem.space/image/book"  alt="Error"/>
                            <div class="card-body">
                                <h6 class="card-title text-primary-color">Name</h6>
                                <p class="card-text text-primary-color">Category</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4 col-md">
                        <a href="#" class="card text-decoration-none">
                            <img class="card-img-top img-fit" src="https://api.lorem.space/image/book"  alt="Error"/>
                            <div class="card-body">
                                <h6 class="card-title text-primary-color">Name</h6>
                                <p class="card-text text-primary-color">Category</p>
                            </div>
                        </a>
                    </div>

                </div>
            <hr>
        </section>

    <section class="container">
        <form action="">
            <h3 class="mb-3">Feedback</h3>
            @guest()
                <div class="row mb-2">
                    <div class="col-3 d-flex justify-content-center align-items-center border-end border-1">
                        <label for="name"><span class="text-danger">*</span>Name</label>
                        <input type="text" class="form-control ms-2" id="name">
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <span>Or <a href="{{ route('login') }}" class="text-decoration-none">Login</a> to give a feedback</span>
                    </div>
                </div>
            @endguest
            <div class="row mb-2">
                <div class="col-6">
                    <textarea id="premiumskinsandicons-bootstrap" name="feedback_message"></textarea>
                </div>
                <div class="col-6">
                    <div class="card text-dark">
                        <div class="card-body d-flex flex-start">
                            <img class="rounded shadow-1-strong me-3"
                                 src="https://api.lorem.space/image/face" alt="avatar" width="80" height="80" />
                            <div>
                                <h6 class="fw-bold mb-1">Văn Tèo</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <span class="mb-0">March 15, 2021</span>
                                    <a href="#" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                    <a href="#" class="text-success"><i class="fa-solid fa-trash ms-2"></i></a>
                                </div>
                                <p class="mb-0">
                                    Hôm Nay Em Tuyệt Lắm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
    </section>

    <footer class="bg-secondary-color">
        <x-home.overlay-top />
    </footer>
    <script src="https://cdn.tiny.cloud/1/q9jvkl47n5k7covggc5pinvziolp0zpycw2ieyl3adc8mjwj/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            entity_encoding : "raw",
            selector: 'textarea#premiumskinsandicons-bootstrap',
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            skin: 'bootstrap',
            plugins: 'lists link anchor charmap',
            toolbar: 'formatselect | bold italic bullist numlist | link image charmap',
            menubar: false,
            setup: (editor) => {
                editor.on('init', () => {
                    editor.getContainer().style.transition="border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
                });
                editor.on('focus', () => {
                    editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(179, 87, 87, .25)"
                    editor.getContainer().style.borderColor="#B35757"
                });
                editor.on('blur', () => {
                    editor.getContainer().style.boxShadow=""
                    editor.getContainer().style.borderColor=""
                });
            }
        });
    </script>
</x-home-layout>
