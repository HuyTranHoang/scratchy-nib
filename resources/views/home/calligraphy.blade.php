<x-layouts.master>
    <header class="bg-secondary-color">
        <x-partials.overlay-bottom />
    </header>
    <style>

        .card .img-fit{
            aspect-ratio: 16/16;
            object-fit: cover;
        }
    </style>
        <div class="container">
            <div class="row mb-2">
                <div class="col-2">
                        <select class="form-select" aria-label="category">
                        <option selected hidden>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-10">
                    <form action="" class="d-flex w-50 float-end">
                        <input class="form-control rounded-start rounded-0" id="" name="" type="text" placeholder="Search" aria-label="search">
                        <button class="btn btn-primary-color rounded-end rounded-0 " type="submit"><i class="fas fa-search"></i></button>
                    </form>
                 </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <button class="btn btn-primary-color mx-1 mb-1 ">ALL</button>
                    <button class="btn btn-primary-color mx-1 mb-1 ">Traditional Calligraphy</button>
                    <button class="btn btn-primary-color mx-1 mb-1 ">Contemporary Calligraphy</button>
                    <button class="btn btn-primary-color mx-1 mb-1 ">Hand-lettering & Design</button>
                    <button class="btn btn-primary-color mx-1 mb-1 ">Modern Calligraphy</button>
                    <button class="btn btn-primary-color mx-1 mb-1 ">Modern Calligraphy</button>
                </div>
            </div>
        </div>
        <section class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                   <div class="card h-100">
                        <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" data-lightbox="gallery"><img class="card-img-top img-fit" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg"  alt="Error"/></a>
                        <div class="card-body">
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category fassssssssssssssssssssssssssssssssssssss</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                   <div class="card h-100">
                        <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" data-lightbox="gallery"><img class="card-img-top img-fit" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg"  alt="Error"/></a>
                        <div class="card-body" >
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                   <div class="card h-100">
                        <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" data-lightbox="gallery"><img class="card-img-top img-fit" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg"  alt="Error"/></a>
                        <div class="card-body" >
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                   <div class="card h-100">
                        <a href="https://api.lorem.space/image/face" data-lightbox="gallery"><img class="card-img-top img-fit" src="https://api.lorem.space/image/face"  alt="Error"/></a>
                        <div class="card-body" >
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                   <div class="card h-100">
                        <a href="https://api.lorem.space/image/album" data-lightbox="gallery"><img class="card-img-top img-fit" src="https://api.lorem.space/image/album"  alt="Error"/></a>
                        <div class="card-body" >
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                   <div class="card h-100">
                        <a href="https://api.lorem.space/image/book" data-lightbox="gallery"><img class="card-img-top img-fit" src="https://api.lorem.space/image/book"  alt="Error"/></a>
                        <div class="card-body" >
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                   <div class="card h-100">
                        <a href="https://api.lorem.space/image/game" data-lightbox="gallery"><img class="card-img-top img-fit" src="https://api.lorem.space/image/game"  alt="Error"/></a>
                        <div class="card-body" >
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                   <div class="card h-100">
                        <a href="https://api.lorem.space/image/movie" data-lightbox="gallery"><img class="card-img-top img-fit"   src="https://api.lorem.space/image/movie"  alt="Error"/></a>
                        <div class="card-body" >
                            <h6 class="card-title">Name</h6>
                            <p class="card-text">Category</p>
                            <a class="btn btn-primary-color mt-auto text-decoration-none rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    <footer class="bg-secondary-color">
        <x-partials.overlay-top />
    </footer>
</x-layouts.master>
