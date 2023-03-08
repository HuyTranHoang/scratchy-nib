<header>
    <h2 class="fs-4"> Profile Information </h2>
    <p class="text-primary-color">
        Update your account's profile information and email address.
    </p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-6">
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

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="my-0 text-primary"
                >Your profile information is saved</p>
            @endif
        </div>
    </div>
</form>
