<section class="container">
    <hr>
    <p class="text-primary-color fs-3">You may also like</p>
    <div class="row row-cols-lg-6 row-cols-md-3 row-cols-sm-4 g-4">
        @foreach($calligraphies as $subCalligraphy)
            @if($subCalligraphy->calligraphy_id != $calligraphy->calligraphy_id)
                <div class="col-sm-4 col-md">
                    <a href="{{ route('home.detail', ['calligraphy' => $subCalligraphy->calligraphy_id]) . '-' . Str::slug($subCalligraphy->calligraphy_name) }}" class="card category__card text-decoration-none h-100">
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
