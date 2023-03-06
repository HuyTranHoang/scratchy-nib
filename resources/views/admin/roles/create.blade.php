<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="">Roles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('calligraphies.index')}}" class="btn btn-sm btn-outline-primary">Roles List</a>
            </div>
        </div>
    </div>


    <h3>Create new role</h3>

    <form method="POST" action="{{route('roles.store')}}">
        @csrf
        <div class="row">
            <div class="col-lg-8 col-xl-5">
                <label for="role_name" class="form-label">Role Name</label>
                <input type="text" name="role_name" id="role_name" class="form-control" value="{{old('role_name')}}">
                @error('role_name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="row justify-content-end my-3">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Store</button>
                    </div>
                </div>

            </div>
        </div>
    </form>


</x-admin-layout>
