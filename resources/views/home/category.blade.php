<x-home-layout title="Scratchy Nib | Categories">

    <x-home.title-section>
        Categories
    </x-home.title-section>

        <div class="container">
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <form action="{{ route('home.remove-empty-parameters') }}" class="d-flex field-cate">
                       <label class="label-cate" for="calligraphyName">Search by name</label>
                        <input type="hidden" name="cateID" value="{{ request()->cateID }}">
                        <input type="hidden" name="styleID" value="{{ request()->styleID }}">
                        <input class="input-text rounded-start rounded-0" value="{{ request()->calligraphyName }}"
                               id="calligraphyName" name="calligraphyName" type="text" aria-label="search" placeholder="Name of calligraphy..">
                        <button class="btn btn-primary-color rounded-end rounded-0 " type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col d-xxl-flex justify-content-xxl-center">
                    <a href="{{ route('home.category') }}" class="btn btn-primary-color mx-1 mb-2 ">All Calligraphy</a>
                    @foreach($categories as $category)
                        <a href="{{ route('home.category', ['cateID' => $category -> category_id ]).'-'.Str::slug($category->category_name) }}" class="btn btn-primary-color mx-1 mb-2 ">{{ $category -> category_name }}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <section class="container">
            @if(request()->cateID)
                <article class="postcard light red">
                    <a class="postcard__img_link" href="{{ asset('storage/' . $currentCategory->category_image) }}" data-lightbox="thumb">
                        <img class="postcard__img" src="{{ asset('storage/' . $currentCategory->category_image) }}" alt="{{$currentCategory->category_image}}" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red">{{ $currentCategory->category_name }}</h1>
                        <div class="postcard__subtitle small">
                            <i class="fas fa-calendar-alt mr-2"></i> {{ $currentCategory->created_at }}
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            {!! $currentCategory->category_description !!}
                        </div>

                        <span class="mt-3 fw-semibold">Styles list of this category</span>
                        <ul class="postcard__tagbox">
                            @foreach($styles as $style)
                                <li class="tag__item {{request()->styleID == $style->style_id.'-'.Str::slug($style->style_name) ? 'bg-primary text-white' : ''}}">
                                    <a href="{{'?cateID='.$style->calligraphyCategory->category_id.'-'.Str::slug($style->calligraphyCategory->category_name).'&styleID='.$style->style_id.'-'.Str::slug($style->style_name) }}">{{ $style -> style_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @else
                {{-- All Category--}}
                <article class="postcard light red">
                    <a class="postcard__img_link" href="{{ asset('storage/' . $randomImage) }}" data-lightbox="thumb">
                        <img class="postcard__img" src="{{ asset('storage/' . $randomImage) }}" alt="{{$randomImage}}" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red"><a href="#">All Calligraphy</a></h1>
                        <div class="postcard__subtitle small">
                            <i class="fas fa-calendar-alt mr-2"></i> 2023-03-09 18:59:15
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            <b>Calligraphy</b> is the art of creating beautiful, decorative handwriting or lettering with a pen,
                            brush, or other writing instrument. It is an ancient art form that has been practiced for thousands
                            of years, originating in various cultures around the world such as Chinese, Islamic,
                            and Western calligraphy. Calligraphy is not just about writing words, but also about creating
                            a visually appealing design with the strokes, curves, and spacing of the letters.
                            It is often used in artistic expression, invitations, certificates, and other decorative forms
                            of writing. Calligraphy requires patience, skill, and practice to achieve mastery, and is a
                            beautiful way to express creativity and communicate a message.
                        </div>
                        <ul class="postcard__tagbox">
                            @foreach($styles as $style)
                                <li class="tag__item {{request()->styleID == $style->style_id.'-'.Str::slug($style->style_name) ? 'bg-primary text-white' : ''}}">
                                    <a href="{{'?styleID='.$style->style_id.'-'.Str::slug($style->style_name) }}">{{ $style -> style_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endif

            @if(request()->styleID)
                    <article class="postcard light red">
                        <a class="postcard__img_link" href="{{ asset('storage/' . $currentStyle->style_image) }}" data-lightbox="thumb">
                            <img class="postcard__img" src="{{ asset('storage/' . $currentStyle->style_image) }}" alt="{{$currentStyle->style_image}}" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title red">{{ $currentStyle->style_name }}</h1>
                            <div class="postcard__subtitle small">
                                <span>Is the style of <b>{{$currentStyle->calligraphyCategory->category_name}}</b> | </span>
                                <i class="fas fa-calendar-alt mr-2"></i> {{ $currentStyle->created_at }}
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                {!! $currentStyle->style_description !!}
                            </div>

                        </div>
                    </article>
            @endif

            <div class="row mb-3" id="calligraphy">
                <div class="col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{asset('storage/images/divider-pink.png')}}" alt="divider">
                </div>
            </div>

            @if($currentCategory)
                <h4 class="text-primary my-2">{{$currentCategory->category_name}}</h4>
            @endif

            @if($currentStyle && $currentCategory)
                <h5 class="text-primary-color my-2"><i class="fa-solid fa-arrow-right"></i> {{$currentStyle->style_name}}</h5>
            @elseif($currentStyle)
                <h5 class="text-primary-color my-2">{{$currentStyle->style_name}}</h5>
            @endif

            <div class="row row-cols-1 row-cols-md-4 g-4 mb-3">
                @foreach($calligraphies as $calligraphy)
                    <div class="col">
                        <a href="{{ route('home.detail', ['calligraphy' => $calligraphy->calligraphy_id]) . '-' . Str::slug($calligraphy->calligraphy_name)}}" class="card category__card text-decoration-none h-100">
                            <img class="card-img-top img-fit" src=" {{ asset('storage/'. $calligraphy->galleryImage->first()->image_name) }}"  alt="{{ $calligraphy->galleryImage->first()->image_name }}"/>
                            <div class="card-body text-primary-color">
                                <h6 class="card-title">{{ $calligraphy->calligraphy_name }}</h6>
                                <p class="category__card-text">Style: {{ $calligraphy->calligraphyStyle->style_name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {{ $calligraphies->links() }}
            @if($calligraphies->count() == 0)
                <div style="min-height: 200px">
                    <hr>
                    <h4 class="text-primary-color">There seem to be no search results matching your request, or this category don't have any calligraphy</h4>
                    <a class="btn btn-primary-color mt-3" href="{{ route('home.category') }}">Clear all filter and search key</a>
                </div>
            @endif
        </section>

        <x-home.overlay-top color="bg-secondary-color"/>


    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const element = document.getElementById("calligraphy");
        if (urlParams.has("page")) {
            element.scrollIntoView();
        }
    </script>
</x-home-layout>
