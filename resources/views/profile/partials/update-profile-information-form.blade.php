<header>
    <h2 class="fs-4"> Profile Information </h2>
    <p class="text-primary-color">
        Update your account's profile information and email address.
    </p>
    @if (session('status') === 'profile-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="my-3 text-success fw-semibold"
        >Your profile information is saved</p>
    @endif
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-6" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div>
        <label for="name" class="form-label">Name</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}"
                       class="form-control">
            </div>
        </div>
        @error('name')
        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
        @enderror
    </div>

    <div class="mt-3">
        <label for="email" class="form-label">Email</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}"
                       class="form-control">
            </div>
        </div>
        @error('email')
        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
        @enderror
    </div>

    <div class="mt-3">
        <label for="bio" class="form-label">Bio</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <textarea id="bio" type="text" name="bio" class="form-control" placeholder="Micro bio about you" rows="3">
                    {{ old('bio', $user->bio) }}
                </textarea>
            </div>
        </div>
        @error('bio')
        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
        @enderror
    </div>

    <div class="mt-3">
        <label for="facebook" class="form-label">Facebook</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="facebook" type="text" name="facebook" value="{{ old('facebook', $user->facebook) }}"
                       class="form-control" placeholder="Profile link">
            </div>
        </div>
        @error('facebook')
        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
        @enderror
    </div>

    <div class="mt-3">
        <label for="twitter" class="form-label">Twitter</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="twitter" type="text" name="twitter" value="{{ old('twitter', $user->twitter) }}"
                       class="form-control" placeholder="Profile link">
            </div>
        </div>
        @error('twitter')
        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
        @enderror
    </div>

    <div class="mt-3" id="previewCard">
        <div class="card" style="width: 13rem;">
            <img src="{{ asset('storage/'.$user -> avatar) }}" alt="{{ $user -> avatar }}"
                 class="card-img-top avatar" id="ImgOutput">
            <div class="card-body">
                Image preview
            </div>
        </div>
    </div>


    <div class="mt-3">
        <label for="image" class="form-label">Avatar</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="image" type="file" name="avatar" value="{{ old('avatar', $user->avatar) }}"
                       class="form-control">
            </div>
        </div>
        @error('avatar')
        <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
        @enderror
    </div>

    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <div class="row mt-3">
            <p class="text-primary-color text-decoration-underline" style="font-size: 0.8rem">
                Your email address is unverified.
                <button form="send-verification" class="btn btn-secondary d-flex mt-2" style="font-size: 0.8rem">
                    Click here to re-send the verification email.
                    <span class="loader-inline" id="loader"></span>
                </button>
            </p>

            @if (session('status') === 'verification-link-sent')
                <p class="mt-2 text-success">
                    A new verification link has been sent to your email address.
                </p>
            @endif
        </div>
    @endif

    <div class="row mt-3">
        <div class="d-flex align-items-center justify-content-between col-sm-12 col-md-8 col-lg-5">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
