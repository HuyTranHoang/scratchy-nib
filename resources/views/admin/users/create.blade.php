<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('users.index')}}" class="btn btn-sm btn-outline-primary">Users List</a>
            </div>
        </div>
    </div>


    <h3>Create new user</h3>

    <form method="post" action="{{route('users.store')}}">
        @csrf
        <div class="row">
            <div class="col-lg-8 col-xl-5">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" >
                @error('name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="my-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                    @error('email')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}">
                    @error('password')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role_id" class="form-label">Role</label>
                    <select class="form-select" name="role_id" id="role_id" aria-label="Role select">
                        <option value="" hidden="">-- Select One --</option>
                        @foreach($roles as $role)
                            <option value="{{ $role -> role_id }}">{{ $role -> role_name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="row justify-content-end my-3">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Store</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-admin-layout>
