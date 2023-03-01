<x-users.layouts.master>
    <style>

        /* ---- grid ---- */

        .grid {
            background: #DDD;
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
            width: 33.333%;
        }

        .grid-item {
            float: left;
        }

        .grid-item img {
            display: block;
            max-width: 100%;
        }


    </style>
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
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/movie" />
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/game" />
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/book" />
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/album" />
                </div>
                <div class="grid-item">
                    <img src="https://api.lorem.space/image/face" />
                </div>

            </div>


        </div>
    </section>
    <footer class="bg-secondary-color">
        <x-users.partials.overlay-top />
    </footer>
</x-users.layouts.master>
