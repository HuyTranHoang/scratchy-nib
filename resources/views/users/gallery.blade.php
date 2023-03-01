<x-users.layouts.master>
    <header class="bg-secondary-color">
        <x-users.partials.overlay-bottom />
    </header>
    <section>
        <div class="container">
            <div class="row mb-2 rounded">
                <div class="col-6 d-flex">
                    <select class="form-select" aria-label="SelectClass">
                        <option>Select a Class</option>
                        <option value="">HTML</option>
                        <option value="">CSS</option>
                        <option value="">JavaScript</option>
                    </select>
                    <select class="form-select" aria-label="SelectSection">
                        <option>Select Section</option>
                        <option value="GFG1">HTML</option>
                        <option value="GFG2">CSS</option>
                        <option value="GFG3">JavaScript</option>
                    </select>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <form action="" class="d-flex form-outline">
                        <input class="form-control" id="" name="" type="text" placeholder="Search" aria-label="search">
                        <button class="btn btn-primary-color" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row text-center text-lg-start gy-3 my-3" data-masonry='{"percentPosition": true }'>
                        <div class="col-lg-3 col-md-4 mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div> <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="col-lg-3 col-md-4  mt-2 mb-2 ">
                            <a href=""><img src="{{asset('storage/images/header-cover.png')}}" alt="" class="img-thumbnail"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-secondary-color">
        <x-users.partials.overlay-top />
    </footer>
</x-users.layouts.master>
