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

            <div class="row">
                <div class="col-md-4">
                    <h3>Latest feedback</h3>
                    <div>
                        @forelse($feedback as $feb)
                            <div class="card text-dark mb-2">
                                <div class="card-body d-flex">
                                    <img class="rounded shadow-1-strong me-3"
                                         src="{{ asset('storage/' . $feb->user->avatar) }}" alt="avatar" width="80" height="80" />
                                    <div class="w-100">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 class="fw-bold mb-1"><a href="{{ route('home.show-user',$feb->user->user_id) }}" class="text-decoration-none">{{ $feb->user->name }}</a></h6>
                                                <span class="mb-0">{{ $feb->created_at->diffForHumans() }}</span>
                                                <small class="text-primary-color">{{ $feb->created_at != $feb->updated_at ? '(edited)' : '' }}</small>
                                            </div>
                                            <div class="col-6">
                                                @auth
                                                    @if(Auth::user()->user_id == $feb->user_id || Auth::user()->role_id == 1)
                                                        <button class="btn btn-danger float-end delete-feedback"
                                                                data-id="{{$feb -> feedback_id}}" data-message="{{$feb -> feedback_message}}"
                                                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            Delete
                                                        </button>
                                                    @endif
                                                @endauth
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            {!! $feb->feedback_message !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="card mb-2">
                                <div class="card-body text-success d-flex">
                                    There is no feedback yet!!
                                </div>
                            </div>
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
