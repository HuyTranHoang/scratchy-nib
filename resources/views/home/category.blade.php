<x-home-layout>
    <header class="bg-secondary-color">
        <x-home.overlay-bottom />
    </header>
        <div class="container">
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <form action="" class="d-flex w-50 field-cate">
                       <label class="label-cate" for="searchcate">Search</label>
                        <input class="input-text rounded-start rounded-0" id="searchcate" name="" type="text" aria-label="search">
                        <button class="btn btn-primary-color rounded-end rounded-0 " type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col d-xxl-flex justify-content-xxl-center">
                    <a href="{{ route('home.category', ['filter' => 'all']) }}" class="btn btn-primary-color mx-1 mb-2 ">All Calligraphy</a>
                    @foreach($categories as $category)
                        <a href="{{ route('home.category', ['filter' => $category -> category_id ]) }}" class="btn btn-primary-color mx-1 mb-2 ">{{ $category -> category_name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <section class="container">
            <article class="postcard light red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title red"><a href="#">All Calligraphy</a></h1>
                    <div class="postcard__subtitle small">
                        <i class="fas fa-calendar-alt mr-2"></i> Mon, May 25th 2020
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                    <ul class="postcard__tagbox">
                        @foreach($styles as $style)
                            <li class="tag__item">{{ $style -> style_name }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
            <div class="row row-cols-1 row-cols-md-4 g-4">

                <div class="col">
                    <a href="#" class="card category__card text-decoration-none">
                        <img class="card-img-top img-fit" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg"  alt="Error"/>
                        <div class="card-body text-primary-color">
                            <h6 class="card-title">Name</h6>
                            <p class="category__card-text">Categorysfdddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    <footer class="bg-secondary-color">
        <x-home.overlay-top />
    </footer>
</x-home-layout>
