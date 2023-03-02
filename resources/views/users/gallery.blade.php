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

            <div class="grid">
                <div class="grid-sizer"></div>
                <div class="grid-item">
                    <div class="card-gallery">
                        <img class="card-img-gallery" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Category</p>
                            <a class="card-btn text-decoration-none" href="/about">Detail</a>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" data-lightbox="gallery"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg"  alt=""/></a>
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/movie"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/game"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/book"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/album"  alt=""/>
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/face"  alt=""/>
                </div>
            </div>


        </div>
    </section>
    <footer class="bg-secondary-color">
        <x-users.partials.overlay-top />
    </footer>
</x-users.layouts.master>
