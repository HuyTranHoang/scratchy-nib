<x-users.layouts.master>
    <header class="bg-secondary-color">
        <x-users.partials.overlay-bottom />
    </header>
    <style>
        .card-gallery{
            position: relative;
            overflow: hidden;
        }
        .card-body-gallery{
            width: 100%;
            height: 100%;
            bottom: -100%;
            right: 0;
            position: absolute;
            background-color: #1f3d4738;
            backdrop-filter: blur(5px);
            border-radius: 5px;
            padding: 5px;
            color: whitesmoke;
            flex-direction: column;
            justify-content: center;
            transition: .3s;
        }

        .card-gallery:hover .card-body-gallery{
            bottom: 0;
        }
        .card-title-gallery{
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0;
            position: absolute;
            top: 65%;

        }
        .card-category{
            text-transform: capitalize;
            font-size: 0.7rem;
            font-weight: 300;
            position: absolute;
            top: 75%;
        }
        .card-btn{
            background-color: oldlace;
            color: #1f3d47;
            padding: 1px 5px;
            border-radius: 5px;
            text-transform: capitalize;
            border: none;
            outline: none;
            font-weight: 500;
            position: absolute;
            top: 85%;
            text-decoration: none;
        }

        /* clear fix */
        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        /* ---- .grid-item ---- */

        .grid-sizer,
        .grid-item {
            width: calc(25% - 10px);
            margin-top: 10px;
        }
        .grid-item {
            float: left;
        }

        .grid-item img {
            display: block;
            max-width: 100%;
        }
        .grid-item img:hover {
        }
        @media (max-width: 767px) {
            .grid-item {
                width: calc(100% - 10px);
            }
        }
        .lb-data .lb-close {
            display: none;
        }
    </style>
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
                        <img class="card-img-gallery " src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg"  alt="Error"/>
                        <a class="card-body-gallery" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" data-lightbox="gallery">
                            <h6 class="card-title-gallery">Name</h6>
                            <p class="card-category">Categories</p>
                            <a class="card-btn" href="/about">Detial</a>
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
