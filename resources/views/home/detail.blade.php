<x-home-layout>
    <header class="bg-secondary-color">
        <x-home.overlay-bottom />
    </header>
    <div class="container detail">
        <div class="row">
            <div class="col-md-5 bg-secondary-color p-0">
                    <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" data-lightbox="detail">
                        <img class="img-size rounded" src="https://api.lorem.space/image/face" alt="error">
                    </a>
            </div>
            <div class="col-md-7  bg-secondary-color rounded">
                <div class="main-description my-3">
                    <div class="categories text-bold">
                        Category:
                    </div>
                    <div class="detail-title text-bold my-3">
                        Name Art
                    </div>
                    <div class="author-title fw-semibold">
                        Author :
                    </div>
                    <div class="mt-3 fw-semibold">
                        Date :
                    </div>
                </div>
                <div class="">
                    <p class="details-title text-color mb-1">Detail</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi odio recusandae aliquid ad impedit autem commodi earum voluptatem laboriosam? </p>
                </div>
            </div>
        </div>
    </div>

        <section class="container">
            <hr>
            <p class="display-5">More Category</p>
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
        {{ request()->feedback_message }}
        <form action="">
            <div class="row mb-2">
                <div class="col-8">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="col-4 text-center">
                    <a href="" class="text-decoration-none">Login</a> to comment
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label for="email">Describe your issue in detail</label>
                    <textarea id="premiumskinsandicons-bootstrap" name="feedback_message"></textarea>
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


    <section class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="card text-dark">
                    <div class="card-body">
                        <div class="d-flex flex-start">
                            <img class="rounded shadow-1-strong me-3" src="https://api.lorem.space/image/face" alt="avatar" width="60" height="60" />
                                <div>
                                    <h6 class="fw-bold mb-1">Văn Tèo</h6>
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">March 15, 2021</p>
                                        <a href="#" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                        <a href="#" class="text-success"><i class="fa-solid fa-trash ms-2"></i></i></a>
                                    </div>
                                    <p class="mb-0">Hôm Nay Em Tuyệt Lắm</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-dark">
                <div class="card-body">
                    <div class="d-flex flex-start">
                        <img class="rounded shadow-1-strong me-3" src="https://api.lorem.space/image/face" alt="avatar" width="60" height="60" />
                        <div>
                            <h6 class="fw-bold mb-1">Văn Tèo</h6>
                            <div class="d-flex align-items-center mb-3">
                                <p class="mb-0">March 15, 2021</p>
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
        <div class="col w-50">
            <div class="card text-dark">
                <div class="card-body">
                    <div class="d-flex flex-start">
                        <img class="rounded shadow-1-strong me-3" src="https://api.lorem.space/image/face" alt="avatar" width="60" height="60" />
                        <div>
                            <h6 class="fw-bold mb-1">Văn Tèo</h6>
                            <div class="d-flex align-items-center mb-3">
                                <p class="mb-0">March 15, 2021</p>
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
                    editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(0, 123, 255, .25)",
                        editor.getContainer().style.borderColor="#80bdff"
                });
                editor.on('blur', () => {
                    editor.getContainer().style.boxShadow="",
                        editor.getContainer().style.borderColor=""
                });
            }
        });
    </script>
</x-home-layout>
