<header>
    <h2 class="fs-4"> Update Password </h2>
    <p class="text-primary-color">
        Ensure your account is using a long, random password to stay secure.
    </p>
</header>

<form method="post" action="{{ route('password.update') }}" class="mt-6">
    @csrf
    @method('put')
    <div>
        <label for="current_password" class="form-label">Current Password</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="current_password" type="password" name="current_password"
                       class="form-control">
            </div>
        </div>
        @if ($errors->updatePassword->get('current_password'))
            @foreach ((array) $errors->updatePassword->get('current_password') as $message)
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @endforeach
        @endif
    </div>

    <div class="mt-3">
        <label for="password" class="form-label">New Password</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="password" type="password" name="password"
                       class="form-control">
            </div>
        </div>
        @if ($errors->updatePassword->get('password'))
            @foreach ((array) $errors->updatePassword->get('password') as $message)
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @endforeach
        @endif
    </div>

    <div class="mt-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-5">
                <input id="password_confirmation" type="password" name="password_confirmation"
                       class="form-control">
            </div>
        </div>
        @if ($errors->updatePassword->get('password_confirmation'))
            @foreach ((array) $errors->updatePassword->get('password_confirmation') as $message)
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
            @endforeach
        @endif
    </div>

    <div class="row mt-3">
        <div class="d-flex align-items-center justify-content-between col-sm-12 col-md-8 col-lg-5">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
