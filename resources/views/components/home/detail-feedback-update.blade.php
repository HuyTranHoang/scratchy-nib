<section class="container">
    <h3 id="feedback" class="mb-3">Feedback</h3>
    <div class="row mb-2">
        <div class="col-md-6">
            @guest
                <div class="row mb-2">
                    <div class="col-md-6">
                        <h4><a href="{{ route('login') }}" class="text-decoration-none">Login</a> to give a feedback</h4>
                    </div>
                </div>
            @endguest
            @auth
                <form action="{{ route('home.update-feedback',$editfeedback->feedback_id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">
                    <input type="hidden" name="calligraphy_id" value="{{ $calligraphy->calligraphy_id }}">
                    <textarea name="feedback_message">
                        @if($editfeedback->user_id == auth()->user()->user_id)
                            {{$editfeedback->feedback_message}}
                        @endif
                    </textarea>
                    @error('feedback_message')
                    <span class="text-danger mt-3 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary float-end mt-3">Update</button>
                        </div>
                    </div>
                </form>
            @endauth
        </div>
        <div class="col-md-6">
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
                                </div>
                                <div class="col-6">
                                    @auth
                                        @if(Auth::user()->user_id == $feb->user_id || Auth::user()->role_id == 1)
                                            <button class="btn btn-danger float-end delete-feedback"
                                                    data-id="{{$feb -> feedback_id}}" data-message="{{$feb -> feedback_message}}"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                Delete
                                            </button>
                                            <a href="{{ Request::url() . '?feedback=' . $feb->feedback_id }}" class="btn btn-success float-end me-3">Edit</a>
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
                        Be the first to leave a comment on this calligraphy!!!
                    </div>
                </div>
            @endforelse
            {{ $feedback->links() }}
        </div>
    </div>
    <hr>
</section>
