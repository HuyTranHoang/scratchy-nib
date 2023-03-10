<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Roles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('roles.create')}}" class="btn btn-sm btn-outline-primary">Add New Role</a>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-6">
            <h3>Roles list</h3>
        </div>

        <div class="d-sm-block col-md-6 d-md-flex justify-content-md-end">
            <a class="btn btn-primary-color rounded me-3" href="{{ route('roles.index') }}">Reset</a>
            <form action="" class="d-flex form-outline">
                <input class="form-control rounded-start rounded-0" value="{{ request()->userName }}"
                       name="roleName" type="text" placeholder="Search by name.." aria-label="search">
                <button class="btn rounded-end rounded-0 btn-primary-color" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
            <tr>
                <th scope="col" class="">#</th>
                <th scope="col" class="col-6 w-75">Role Name</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col" class="">Created At</th>
            </tr>
            </thead>
            <tbody>
            @php
                $redirectTo = $roles->url($roles->currentPage());
                if (!$roles -> hasMorePages() && $roles -> count() == 1) {
                    $redirectTo = $roles -> previousPageUrl();
                }
            @endphp
            @forelse($roles as $index => $role)
                <tr>
                    <td>{{$role -> role_id}}</td>
                    <td>{{$role -> role_name}}</td>

                    <td class="text-center px-0">
                        <a href="{{route('calligraphies.edit', $role -> role_id)}}"><i class="px-1 fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 delete-calligraphy" style="background-color: inherit"
                                data-id="{{$role -> role_id}}" data-name="{{$role -> role_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>

                    <td>{{date('d-m-Y', strtotime($role -> created_at))}}</td>
                </tr>
                @empty
                    <tr>
                        <td></td>
                        <td colspan="4" class="">No search results found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <x-delete-modal>
        <x-slot:action>
            {{route('roles.destroy','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="role_id" name="role_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this role?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>

            <label for="role_name">Role name: </label>
            <input class="form-control mt-1" type="text" id="role_name" name="role_name" disabled readonly>
        </x-slot:body>
    </x-delete-modal>

</x-admin-layout>
