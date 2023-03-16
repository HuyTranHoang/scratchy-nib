<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('users.index')}}" class="btn btn-sm btn-outline-primary">Users List</a>
            </div>
        </div>
    </div>

    <h3>Edit user</h3>

    <form method="post" action="{{route('users.update',$user->user_id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8 col-xl-5">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$user -> name) }}" >
                @error('name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email',$user -> email) }}">
                    @error('email')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password',$user -> password) }}">
                    @error('password')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role_id" class="form-label">Role</label>
                    <select class="form-select" name="role_id" id="role_id" aria-label="Role select">
                        <option value="" hidden="">-- Select One --</option>
                        @foreach($roles as $role)
                            <option {{ $user->role_id == $role->role_id ? 'selected' : '' }} value="{{ $role -> role_id }}">{{ $role -> role_name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea id="bio" type="text" name="bio" class="form-control" placeholder="Micro bio about you" rows="3">
                        {{ old('bio', $user->bio) }}
                    </textarea>
                    @error('bio')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input id="facebook" type="text" name="facebook" value="{{ old('facebook', $user->facebook) }}"
                           class="form-control" placeholder="Profile link">
                    @error('facebook')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="twitter" class="form-label">Twitter</label>
                    <input id="twitter" type="text" name="twitter" value="{{ old('twitter', $user->twitter) }}"
                           class="form-control" placeholder="Profile link">
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
                    <input id="image" type="file" name="avatar" value="{{ old('avatar', $user->avatar) }}"
                           class="form-control">
                    @error('avatar')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="row justify-content-end my-3">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-admin-layout>
