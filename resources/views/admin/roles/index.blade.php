<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Roles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('roles.create')}}" class="btn btn-sm btn-outline-primary">Add New Role</a>
            </div>
        </div>
    </div>

    <h3>Roles List</h3>
    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Role Name</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $index => $role)
                <tr>
                    <td>{{$role -> role_id}}</td>
                    <td>{{$role -> role_name}}</td>
                    <td class="table-action text-center d-flex justify-content-center">
                        <a href="{{route('roles.edit', $role -> role_id)}}"><i class="fa-solid fa-pen"></i></a>
                        <button type="button" class="ms-3 border-0 {{$index % 2 != 0 ? 'bg-white' : ''}} delete-role"
                                data-id="{{$role -> role_id}}" data-name="{{$role -> role_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d-m-Y', strtotime($role -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <x-admin.partials.delete-modal>
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
    </x-admin.partials.delete-modal>

</x-admin-layout>
