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
            <div class="col-md-6 p-0 d-flex align-items-center justify-content-center">
                    <a href="{{ asset('storage/'.$calligraphy -> galleryImage -> first() -> image_name) }}" data-lightbox="detail">
                        <img class="rounded img-fluid" src="{{asset('storage/'.$calligraphy -> galleryImage -> first() -> image_name)}}" alt="error">
                    </a>
            </div>

            <div class="col-md-6 bg-secondary-color rounded">
                <div class="my-3">
                    <h1 class="text-primary">{{ $calligraphy -> calligraphy_name }}</h1>
                </div>
                <hr>
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

    <x-home.detail-you-may-also-like :calligraphies="$calligraphies" :calligraphy="$calligraphy" />

    @if(request()->feedback)
        <x-home.detail-feedback-update :feedback="$feedback" :calligraphy="$calligraphy" :editfeedback="$editfeedback"/>
    @else
        <x-home.detail-feedback :feedback="$feedback" :calligraphy="$calligraphy"/>
    @endif

    <x-home.overlay-top color="bg-secondary-color"/>

    {{--    Tinymce Script  --}}
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
