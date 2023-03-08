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
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name Nhu Quan Que Vay Do Hieu Hong Con Quy</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery ">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery ">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://api.lorem.space/image/face"  alt="Error"/>
                        <a class="card-body-gallery" href="https://api.lorem.space/image/face" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://api.lorem.space/image/album"  alt="Error"/>
                        <a class="card-body-gallery" href="https://api.lorem.space/image/album" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://api.lorem.space/image/book"  alt="Error"/>
                        <a class="card-body-gallery" href="https://api.lorem.space/image/book" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://api.lorem.space/image/game"  alt="Error"/>
                        <a class="card-body-gallery" href="https://api.lorem.space/image/game" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://api.lorem.space/image/movie"  alt="Error"/>
                        <a class="card-body-gallery" href="https://api.lorem.space/image/movie" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item rounded">
                    <div class="card-gallery">
                        <img class="card-img-gallery rounded" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="#">Detail</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-home.overlay-top color="bg-secondary-color" />

</x-home-layout>
