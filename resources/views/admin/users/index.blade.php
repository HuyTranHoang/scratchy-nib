<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Add New User</button>
            </div>
        </div>
    </div>


    <h3>Users List</h3>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col" class="text-center">Action</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user -> user_id}}</td>
                    <td>{{$user -> name}}</td>
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> password}}</td>
                    <td class="table-action text-center" style="min-width: 100px">
                        <a href="#" ><i class="fa-solid fa-pen"></i></a>
                        <span><a href="#"><i class="fa-solid fa-trash"></i></a></span>
                    </td>
                    <td>{{date('d-m-Y', strtotime($user -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
