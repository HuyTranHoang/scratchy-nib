<x-home-layout>
    <header class="bg-secondary-color">
        <x-home.overlay-bottom />
    </header>
    <section>
        <div class="container">
            <div class="row mb-2 rounded">
                <div class="d-sm-block col-md-6 d-md-flex">
                    <div class="field me-4">
                        <label for="SelectClass" class="label">Class</label>
                        <select class="select mt-2" id="SelectClass">
                            <option>Select a Class</option>
                            <option value="">HTML</option>
                            <option value="">CSS</option>
                            <option value="">JavaScript</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="SelectSection" class="label">Section</label>
                        <select class="select mt-2" id="SelectSection">
                            <option>Select Section</option>
                            <option value="GFG1">HTML</option>
                            <option value="GFG2">CSS</option>
                            <option value="GFG3">JavaScript</option>
                        </select>
                    </div>

                    {{--                    Hiện Khi Chọn 1 Class (backend)--}}

                </div>
                <div class="d-sm-block col-md-6 d-md-flex justify-content-md-end mt-2">
                    <form action="" class="d-flex form-outline">
                        <input class="form-control rounded-start rounded-0" id="" name="" type="text" placeholder="Search" aria-label="search">
                        <button class="btn rounded-end rounded-0 btn-primary-color" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
{{--                    Hiện Khi Chọn 1 Class (backend)--}}
            <div class="grid">
                <div class="grid-sizer"></div>
                @foreach($images as $image)
                    <div class="grid-item rounded">
                        <div class="card-gallery">
                            <img class="card-img-gallery rounded" src="{{ asset('storage/'.$image->image_name) }}"  alt="Error"/>
                            <a class="card-body-gallery" href="{{ asset('storage/'.$image->image_name) }}" data-lightbox="gallery">
                                <h6 class="card-title-gallery"></h6>
                                <p class="card-category">{{ $image -> calligraphy -> calligraphyStyle -> style_name }}</p>
                                <a class="card-btn text-decoration-none" href="{{ route('home.detail', $image -> calligraphy -> calligraphy_id) }}">Detail</a>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <x-home.overlay-top color="bg-secondary-color" />

</x-home-layout>
