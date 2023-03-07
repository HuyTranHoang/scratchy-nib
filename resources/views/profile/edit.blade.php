<x-home-layout>

    @include('sweetalert::alert')

    <section class="bg-secondary-color">
        <div class="row m-0">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary mt-5">Profile</h1>
            </div>
        </div>
        <x-home.partials.overlay-bottom />
    </section>

    <section>
        <div class="container">

            <div class="row bg-secondary-color rounded py-4 px-3 mb-5">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="row bg-secondary-color rounded py-4 px-3 mb-5">
                @include('profile.partials.update-password-form')
            </div>

        </div>
        <x-home.partials.overlay-top color="bg-secondary-color"/>
    </section>
</x-home-layout>

