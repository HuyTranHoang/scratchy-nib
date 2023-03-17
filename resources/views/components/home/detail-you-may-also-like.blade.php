<section class="container">
    <hr>
    <p class="text-primary-color fs-3">You may also like</p>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mb-3">
        @foreach($calligraphies as $subCalligraphy)
            @if($subCalligraphy->calligraphy_id != $calligraphy->calligraphy_id)
            <div class="col">
                <a href="{{ route('home.detail', ['calligraphy' => $subCalligraphy->calligraphy_id]) . '-' . Str::slug($subCalligraphy->calligraphy_name)}}" class="card category__card text-decoration-none h-100">
                    <img class="card-img-top img-fit" src=" {{ asset('storage/'. $subCalligraphy->galleryImage->first()->image_name) }}"  alt="{{ $subCalligraphy->galleryImage->first()->image_name }}"/>
                    <div class="card-body text-primary-color">
                        <h6 class="card-title">{{ $subCalligraphy->calligraphy_name }}</h6>
                        <p class="category__card-text">Style: {{ $subCalligraphy->calligraphyStyle->style_name }}</p>
                    </div>
                </a>
            </div>
            @endif
        @endforeach
    </div>
    <hr>
</section>
