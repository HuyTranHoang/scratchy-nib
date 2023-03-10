<x-home-layout>
    <section class="bg-secondary-color">
        <div class="row m-0">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary mt-5">Detail</h1>
            </div>
        </div>
        <x-home.overlay-bottom />
    </section>

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
            <p class="text-primary-color fs-3">You may also like</p>
                <div class="row row-cols-lg-6 row-cols-md-3 row-cols-sm-4 g-4">
                    @foreach($calligraphies as $subCalligraphy)
                        @if($subCalligraphy->calligraphy_id != $calligraphy->calligraphy_id)
                            <div class="col-sm-4 col-md">
                                <a href="{{ route('home.detail', $subCalligraphy->calligraphy_id) }}" class="card category__card text-decoration-none h-100">
                                    <img class="card-img-top" src="{{asset('storage/'.$subCalligraphy -> galleryImage -> first() -> image_name)}}"  alt="Error"/>
                                    <div class="card-body d-flex flex-column justify-content-end">
                                        <h6 class="card-title text-primary-color">{{ $subCalligraphy->calligraphy_name }}</h6>
                                        <p class="card-text text-primary-color">{{ $subCalligraphy->calligraphyStyle->style_name }}</p>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach

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
                      <textarea name="feedback_message">

                      </textarea>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card text-dark">
                        <div class="card-body d-flex">
                            <img class="rounded shadow-1-strong me-3"
                                 src="https://api.lorem.space/image/face" alt="avatar" width="80" height="80" />
                            <div class="w-100">
                                <h6 class="fw-bold mb-1">Văn Tèo</h6>
                                <span class="mb-0">March 15, 2021</span>
                                <p class="mb-0">
                                    Hôm Nay Em Tuyệt Lắm
                                </p>
                                <button class="btn btn-danger float-end">Delete</button>
                                <button class="btn btn-success float-end me-3">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr>
    </section>


    <x-home.overlay-top color="bg-secondary-color"/>

    <script src="https://cdn.tiny.cloud/1/r2ca2qp43km71mdmbvjwkdd99vpglucckcwto4flreqbh93a/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            entity_encoding : "raw",
            height: 250,
            selector: 'textarea',
            plugins: 'lists link anchor charmap',
            toolbar: 'formatselect | bold italic bullist numlist | link image charmap',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            menubar: false,
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>
</x-home-layout>
