<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('users.create')}}" class="btn btn-sm btn-outline-primary">Add New User</a>
            </div>
        </div>
    </div>


    <h3>Users list</h3>
    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $index => $user)
                <tr>
                    <td>{{$user -> user_id}}</td>
                    <td>{{$user -> name}}</td>
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> password}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('users.edit', $user -> user_id)}}"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 {{$index % 2 != 0 ? 'bg-white' : ''}} delete-users"
                                data-id="{{$user -> user_id}}" data-name="{{$user -> name}}" data-email="{{$user -> email}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d-m-Y', strtotime($user -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <x-admin.delete-modal>
        <x-slot:action>
            {{route('users.destroy','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="user_id" name="user_id" hidden="" value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this user?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>
            <label for="user_name">Name: </label>
            <input class="form-control mt-1" type="text" id="user_name" disabled readonly>
            <label for="user_email">Email: </label>
            <input class="form-control mt-1" type="text" id="user_email" disabled readonly>
        </x-slot:body>
    </x-admin.delete-modal>

</x-admin-layout>
