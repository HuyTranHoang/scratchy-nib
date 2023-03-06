<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('home.index')}}" class="btn btn-sm btn-outline-primary">Back to homepage</a>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
            <x-admin.partials.card-icon header="Users" class="text-bg-success" class-icon="text-success">
                <x-slot:icon>
                    <i class="fa-duotone fa-user"></i>
                </x-slot:icon>

                <h5 class="card-title">151</h5>
                <p class="card-text">Registered Users</p>
            </x-admin.partials.card-icon>

            <x-admin.partials.card-icon header="Visitors" class="text-bg-danger" class-icon="text-danger">
                <x-slot:icon>
                    <i class="fa-duotone fa-chart-simple"></i>
                </x-slot:icon>

                <h5 class="card-title">123</h5>
                <p class="card-text">Total visitor count</p>
            </x-admin.partials.card-icon>

            <x-admin.partials.card-icon header="Calligraphies" class="text-bg-primary" class-icon="text-primary">
                <x-slot:icon>
                    <i class="fa-duotone fa-pen-nib"></i>
                </x-slot:icon>

                <h5 class="card-title">22</h5>
                <p class="card-text">Total calligraphy count</p>
            </x-admin.partials.card-icon>

            <x-admin.partials.card-icon header="Feedback" class="text-bg-secondary" class-icon="text-secondary">
                <x-slot:icon>
                    <i class="fa-duotone fa-comments"></i>
                </x-slot:icon>

                <h5 class="card-title">123</h5>
                <p class="card-text">Total feedback count</p>
            </x-admin.partials.card-icon>

        </div>
    </div>

</x-admin-layout>
