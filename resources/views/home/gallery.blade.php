<x-home-layout title="Scratchy Nib | Gallery">


    <x-home.title-section>
        Gallery
    </x-home.title-section>

    <section>
        <div class="container">
            <div class="row mb-2 rounded">
                <div class="d-sm-block col-md-6 d-md-flex">
                    <form action="{{ route('home.remove-empty-parameters') }}" class="me-sm-0 me-md-3">
                        <div class="field me-4">
                            <label for="cateID" class="gallery-label">Filter by Category</label>
                            <input type="hidden" name="sort" value="{{ request()->sort }}">
                            <select class="select mt-2" id="cateID" name="cateID" onchange='this.form.submit()'>
                                <option value="">All</option>
                                @foreach($categories as $category)
                                    <option {{ $category->category_id == request()->cateID ? 'selected' : '' }} value="{{ $category -> category_id }}">{{ $category -> category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>

                    <form action="{{ route('home.remove-empty-parameters') }}" class="me-sm-0 me-md-3">
                        <div class="field">
                            <input type="hidden" name="cateID" value="{{ request()->cateID }}">
                            <input type="hidden" name="sort" value="{{ request()->sort }}">
                            <label for="styleID" class="gallery-label">Filter by Style</label>
                            <select class="select mt-2" id="styleID" name="styleID" onchange='this.form.submit()'>
                                <option value="">All</option>
                                @foreach($styles as $style)
                                    <option {{ $style->style_id == request()->styleID ? 'selected' : '' }} value="{{ $style -> style_id }}">{{ $style -> style_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>

                    <form action="{{ route('home.remove-empty-parameters') }}">
                        <div class="field">
                            <input type="hidden" name="cateID" value="{{ request()->cateID }}">
                            <input type="hidden" name="styleID" value="{{ request()->styleID }}">
                            <label for="sort" class="gallery-label">Sort</label>
                            <select class="select mt-2" id="sort" name="sort" onchange='this.form.submit()'>
                                <option {{ request()->sort == 'ASC' ? 'selected' : '' }} value="ASC">Oldest</option>
                                <option {{ request()->sort == 'DESC' ? 'selected' : '' }} value="DESC">Latest</option>
                            </select>
                        </div>
                    </form>

                </div>

                <div class="d-sm-block col-md-6 d-md-flex justify-content-md-end mt-2">
                    <a class="btn btn-primary-color me-3 mb-2 mb-md-0 rounded" href="{{ route('home.gallery') }}">Clear all filter</a>
                    <form action="{{ route('home.remove-empty-parameters') }}" class="d-flex form-outline">
                        <input type="hidden" name="cateID" value="{{ request()->cateID }}">
                        <input type="hidden" name="styleID" value="{{ request()->styleID }}">
                        <input class="form-control rounded-start rounded-0" value="{{ request()->calliName }}"
                               name="calliName" type="text" placeholder="Search by name.." aria-label="search">
                        <button class="btn rounded-end rounded-0 btn-primary-color" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{asset('storage/images/divider-gold.png')}}" alt="divider">
                </div>
            </div>

            @if($currentCategory)
                <h4 class="text-primary my-2">{{$currentCategory}}</h4>
            @endif

            @if($currentStyle && $currentCategory)
                <h5 class="text-primary-color my-2"><i class="fa-solid fa-arrow-right"></i> {{$currentStyle}}</h5>
            @elseif($currentStyle)
                <h5 class="text-primary-color my-2">{{$currentStyle}}</h5>
            @endif

            <div class="grid mb-3">
                <div class="grid-sizer"></div>
                @foreach($images as $image)
                    <div class="grid-item rounded">
                        <div class="card-gallery">
                            <img class="card-img-gallery rounded" src="{{ asset('storage/'.$image->image_name) }}"  alt="Error"/>
                            <a class="card-body-gallery" href="{{ asset('storage/'.$image->image_name) }}" data-lightbox="{{ $image->image_name }}" data-title="{{ $image -> calligraphy -> calligraphy_name }}">
                                <h6 class="card-title-gallery">{{ $image -> calligraphy -> calligraphy_name }}</h6>
                                <p class="card-category">{{ $image -> calligraphy -> calligraphyStyle -> style_name }}</p>
                                <a class="card-btn text-decoration-none" href="{{ route('home.detail', $image -> calligraphy -> calligraphy_id).'-'.Str::slug($image -> calligraphy -> calligraphy_name) }}">Detail</a>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
            {{ $images->links() }}
            @if($images->count() == 0)
                <div style="min-height: 200px">
                    <h4 class="text-primary-color">There seem to be no search results matching your request, or this category don't have any calligraphy</h4>
                    <a class="btn btn-primary-color mt-3" href="{{ route('home.gallery') }}">Reset all filter and search</a>
                </div>
            @endif
        </div>

    </section>
    <x-home.overlay-top color="bg-secondary-color" />

</x-home-layout>
