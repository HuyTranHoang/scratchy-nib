<x-home-layout>

    <div class="container" style="min-height: 600px">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-404">404</h1>
                <h2 class="fs-1 fw-bold">Page not found</h2>
                <p class="fw-bold">Oops! The page you are looking for does not eixst. It might have been moved or delete.</p>
                <a class="btn btn-primary my-5 px-5" href="{{ route('home.index') }}">BACK TO HOME PAGE</a>
            </div>
        </div>
    </div>
</x-home-layout>
