<x-users.layouts.master>
    <header class="bg-secondary-color">
        <x-users.partials.overlay-bottom />
    </header>
    <section>
        <div class="container">
            <div class="row mb-2 bg-secondary-color border-bottom rounded">
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
            <div class="row bg-secondary-color">
                <div class="col">
                    <div class="row text-center text-lg-start ">

                        <div class="col-lg-3 col-md-4 col-6 mt-2 mb-2 ">
                            <div class="card bg-secondary-color">
                                <a href="/contact" data-toggle="lightbox" data-caption="This describes the image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGfhKhwHAPyQPON31y4bYbPOOfSrfYJhNrrQ&usqp=CAU" class="img-fluid" alt="error">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Name</h5>
                                    <p class="card-text">Decription</p>
                                    <p>Date</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-2 mb-2 ">
                            <div class="card bg-secondary-color">
                                <a href="/contact" data-toggle="lightbox" data-caption="This describes the image">
                                    <img src="https://i.kym-cdn.com/photos/images/original/002/348/324/517.jpg" class="img-fluid" alt="error">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Name</h5>
                                    <p class="card-text">Decription</p>
                                    <p>Date</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-2 mb-2 ">
                            <div class="card bg-secondary-color">
                                <a href="/contact" data-toggle="lightbox" data-caption="This describes the image">
                                    <img src="https://i0.wp.com/befonts.com/wp-content/uploads/2020/01/bellany-modern-script-font.jpg?fit=801%2C534&ssl=1" class="img-fluid" alt="error">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Name</h5>
                                    <p class="card-text">Decription</p>
                                    <p>Date</p>
                                </div>
                            </div>
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
