<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="text-primary-color">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('home.index')}}" class="btn btn-sm btn-outline-primary">Back to homepage</a>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
            <x-admin.card-icon header="Users" class="text-bg-success" class-icon="text-success">
                <x-slot:icon>
                    <i class="fa-duotone fa-user"></i>
                </x-slot:icon>

                <h5 class="card-title">{{ $totalUsers }}</h5>
                <p class="card-text">Registered Users</p>
            </x-admin.card-icon>

            <x-admin.card-icon header="Visitors" class="text-bg-danger" class-icon="text-danger">
                <x-slot:icon>
                    <i class="fa-duotone fa-chart-simple"></i>
                </x-slot:icon>

                <h5 class="card-title">{{ $totalVisitors }}</h5>
                <p class="card-text">Total visitor count</p>
            </x-admin.card-icon>

            <x-admin.card-icon header="Calligraphies" class="text-bg-primary" class-icon="text-primary">
                <x-slot:icon>
                    <i class="fa-duotone fa-pen-nib"></i>
                </x-slot:icon>

                <h5 class="card-title">{{ $totalCalligraphy }}</h5>
                <p class="card-text">Total calligraphy count</p>
            </x-admin.card-icon>

            <x-admin.card-icon header="Feedback" class="text-bg-secondary" class-icon="text-secondary">
                <x-slot:icon>
                    <i class="fa-duotone fa-comments"></i>
                </x-slot:icon>

                <h5 class="card-title">{{ $totalFeedback }}</h5>
                <p class="card-text">Total feedback count</p>
            </x-admin.card-icon>

            <div class="row mt-3">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <h4 class="text-primary-color">Latest Feedback</h4>
                    <div class="list-group">
                        @forelse($feedback as $feb)
                            <a href="{{ route('home.detail', $feb->calligraphy_id) }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('storage/' . $feb->user->avatar) }}" alt="{{ $feb->user->avatar }}" style="width: 25px; border-radius: 25%">
                                        <h5 class="mb-1 ms-2">{{ $feb->user->name }}</h5>
                                    </div>
                                    <small class="text-muted"><i class="fa-regular fa-clock"></i> {{ $feb->created_at->diffForHumans() }}</small>
                                </div>
                                <div class="mt-1">{!! $feb->feedback_message !!}</div>
                                <small><i class="fa-regular fa-arrow-right"></i> {{ $feb->calligraphy->calligraphy_name }}</small>
                            </a>
                        @empty

                        @endforelse
                    </div>
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 mt-3 mt-lg-0">
                    <h4 class="text-primary-color">Latest Users</h4>
                    <div class="list-group">
                    @forelse($users as $user)
                        <a href="{{ route('home.show-user', $user->user_id) }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $feb->user->avatar }}" style="width: 25px; border-radius: 25%">
                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                </div>
                                <small class="text-muted"><i class="fa-regular fa-clock"></i> {{ $user->created_at->diffForHumans() }}</small>
                            </div>
                            <p class="mb-1">{{ $user->email }}</p>
                        </a>
                    @empty

                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <x-delete-modal>
        <x-slot:action>
            {{route('home.delete-feedback','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="feedback_id" name="feedback_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this feedback?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>
            <label for="feedback_message">Feedback message: </label>
            <div id="home_feedback_message" class="mt-3 text-primary-color bg-secondary-color p-2"></div>
        </x-slot:body>
    </x-delete-modal>

</x-admin-layout>
