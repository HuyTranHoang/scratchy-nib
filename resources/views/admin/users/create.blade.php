<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="">Users</h1>
    </div>


    <h3>Create New Users</h3>

    <form method="post" action="{{route('users.store')}}">
        @csrf
        <div class="row">
            <div class="col-5">
                <label for="users_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="users_name" name="users_name" value="{{old('users_email')}}" >
                @error('users_name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="my-3">
                    <label for="users_email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="users_email" id="users_email" value="{{old('users_email')}}">
                    @error('users_email')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="users_password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="users_password" id="users_password" value="{{old('users_password')}}">
                    @error('users_password')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
</x-admin-layout>
