<x-home-layout title="Scratchy Nib | Details">

    <x-home.title-section>
        Details
    </x-home.title-section>

    <div class="container">
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
                <div class="fw-bold mt-3">
                    <h4>Category: <small class="text-primary-color">{{ $calligraphy -> calligraphyStyle -> calligraphyCategory -> category_name }}</small></h4>
                    <h4>Style: <small class="text-primary-color">{{ $calligraphy -> calligraphyStyle -> style_name  }}</small></h4>
                </div>
                <div class="fw-semibold mt-3">
                    <h5>Upload date: <small class="text-primary-color">{{ date('d-m-Y', strtotime($calligraphy -> created_at)) }}</small> </h5>
                </div>
                <h5 class="mt-3">Description: </h5>
                <p class="text-primary-color"> {!! $calligraphy -> calligraphy_description !!}</p>
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

    <!-- Modal -->
    <x-delete-modal>
        <x-slot:action>
            {{route('home.delete-feedback','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="feedback_id" name="feedback_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this feedback?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>
            <label for="feedback_message">Feedback message: </label>
            <div id="home_feedback_message" class="mt-3 text-primary-color bg-secondary-color p-2"></div>
        </x-slot:body>
    </x-delete-modal>

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

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const element = document.getElementById("feedback");
        if (urlParams.has("page")) {
            element.scrollIntoView();
        }

        if (urlParams.has("feedback")) {
            element.scrollIntoView();
        }
    </script>
</x-home-layout>
