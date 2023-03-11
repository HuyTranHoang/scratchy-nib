<x-home-layout title="Scratchy Nib | Profile">

    <section class="bg-secondary-color">
        <div class="row m-0">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary mt-5">Profile View</h1>
            </div>
        </div>
        <x-home.overlay-bottom />
    </section>

    <section>
        <div class="container">

            <div class="card mb-3" style="max-width: 840px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $user->avatar) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-secondary">{{$user->name}}</h5>
                            <p class="card-text"><span class="fw-semibold">Email:</span> {{$user->email}}</p>
                            <p class="card-text"><span class="fw-semibold">Bio:</span> {{$user->bio}}</p>
                            <p class="card-text"><span class="fw-semibold">Registration Date:</span> {{$user->created_at}}</p>

                            <ul class="list-unstyled d-flex gap-3">
                                @if($user->facebook)
                                    <li>
                                        <a style="color: cornflowerblue" href="{{$user->facebook}}"><i class="fa-brands fa-facebook"></i></a>
                                    </li>
                                @endif
                                @if($user->twitter)
                                    <li>
                                        <a style="color: #1DA1F2" href="{{$user->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                @endif
                            </ul>

                            @if(Auth::user()->user_id == $user->user_id)
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit profile</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <x-home.overlay-top color="bg-secondary-color"/>
    </section>

</x-home-layout>

