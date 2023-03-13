<x-home-layout title="Scratchy Nib | Home page">

    <section class="bg-secondary-color position-relative pb-md-0 pb-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-9 pb-5">
                    <h1 class="header-title">Mastering Calligraphy</h1>

                    <p>
                        Welcome to Scratchy Nib, the ultimate resource for viewing, learning and practicing the art of calligraphy.
                        Our website is designed to help you explore the beauty and artistry of this ancient craft, and to provide
                        you with the tools and knowledge you need to become a skilled calligrapher.
                    </p>

                    <h5>Ready to start your journey into the world of calligraphy?</h5>

                    <p>
                        Sign up for our newsletter to receive updates on new tutorials, events, and products,
                        and to stay up-to-date on the latest trends and techniques in this beautiful and timeless art form.
                    </p>

                    <form action="{{ route('subscribe') }}" method="post" class="row">
                        @csrf
                        <div class="col-4">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your name">
                                @error('name')
                                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Your email address">
                                @error('email')
                                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary-color">SUBSCRIBE</button>
                        </div>
                    </form>

                    <h6>Visitor counter: {{ $visitorCount }}</h6>
                </div>
            </div>
        </div>
        <img class="banner-img" src="{{asset('storage/images/header-cover.png')}}" alt="">
    </section>

    <section class="bg-primary-color">
        <div class="container text-primary-color">
            <h1 class="py-3 text-center text-primary">Calligraphy</h1>
            <p>
                Calligraphy is an ancient art form that originated in China over 2000 years ago.
                It involves the creation of beautiful and intricate writing, using a variety of techniques and tools.
                Calligraphy has been used throughout history for a wide range of purposes, from religious texts to
                decorative artwork, and it has evolved into a diverse and vibrant art form with many different styles
                and techniques.
            </p>
            <div class="row">
                <div class="col-md-12 col-lg-6 mt-3">
                    <h6 class="fw-semibold text-primary"><i class="fa-duotone fa-sparkles"></i> Visit our online store to find a wide selection of calligraphy supplies, including pens, ink, paper, and more.</h6>
                    <a class="btn btn-primary-color btn-more-about mt-2">Shop Calligraphy Supplies <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="col-md-12 col-lg-6 mt-3">
                    <h6 class="fw-semibold text-primary"><i class="fa-duotone fa-sparkles"></i> Check out our blog for tips, tutorials, and advice on mastering the art of calligraphy, from basic techniques to advanced skills.</h6>
                    <a class="btn btn-primary-color btn-more-about mt-2">Learn Calligraphy <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    <h6 class="fw-semibold text-primary"><i class="fa-duotone fa-sparkles"></i> Browse our collection of stunning calligraphic artwork, created by some of the world's most talented calligraphers.</h6>
                    <a href="{{ route('home.gallery') }}" class="btn btn-primary-color btn-more-about mt-2">Explore Our Gallery <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <x-home.overlay-bottom color="bg-secondary-color" />

    </section>

    @foreach($categories as $index => $category)
        @if($index % 2 == 0)
            <section data-aos="fade-right" data-aos-easing="ease" class="mb-3">
                <div class="container text-primary">
                    <h1 id="Traditional" class="my-3 text-center text-primary">{{ $category->category_name }}</h1>
                    <div class="row mb-3">
                        <div class="col-sm-4 col-md-4 col-lg-2 offset-lg-1">
                            <img class="img-fluid" src="{{asset('storage/images/divider-pink.png')}}" alt="divider">
                        </div>
                    </div>

                    <div class="row text-primary-color">
                        <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                            {!! $category->category_description !!}
                        </div>
                        <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                            <img class="img-fluid" style="max-height: 500px" src=" {{ asset('storage/' . $category->category_image) }}" alt="">

                            <div class="row">
                                <i>Art work of {{$category->category_name}}</i>
                                <div class="col">
                                    <a href="{{ route('home.category',['cateID' => $category->category_id]) }}" class="btn btn-secondary-color btn-more-about mt-3">
                                        More about {{$category->category_name}} <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="bg-secondary-color mb-3">
                <x-home.overlay-top />
                <div class="container text-secondary overflow-hidden">
                    <div data-aos="fade-left">
                        <h1 id="Contemporary" class="mb-3 text-center">{{$category->category_name}}</h1>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-md-4 col-lg-2 offset-lg-1">
                                <img class="img-fluid" src="{{asset('storage/images/divider-pink.png')}}" alt="divider">
                            </div>
                        </div>
                        <div class="row text-primary-color">
                            <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                                <img class="img-fluid" style="max-height: 500px" src="{{ asset('storage/' . $category->category_image) }}" alt="">
                                <div class="row">
                                    <i>Art work of {{$category->category_name}}</i>
                                    <div class="col">
                                        <a href="{{ route('home.category',['cateID' => 2]) }}" class="btn btn-primary-color btn-more-about mt-3">
                                            More about {{ $category->category_name }} <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                                {!! $category->category_description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <x-home.overlay-bottom />
            </section>
        @endif
    @endforeach

</x-home-layout>
