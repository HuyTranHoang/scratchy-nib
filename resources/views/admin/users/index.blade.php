<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('users.create')}}" class="btn btn-sm btn-outline-primary">Add New User</a>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-6">
            <h3>Users list</h3>
        </div>

        <div class="d-sm-block col-md-6 d-md-flex justify-content-md-end">
            <a class="btn btn-primary-color rounded me-3 mb-3 mb-md-0" href="{{ route('users.index') }}">Reset</a>
            <form action="" class="d-flex form-outline">
                <input class="form-control rounded-start rounded-0" value="{{ request()->userFilter }}"
                       name="userFilter" type="text" placeholder="Search by name, email.." aria-label="search">
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
                <th scope="col">#</th>
                <th scope="col">
                    @if(request()->orderby=='name' && request()->sort=='desc')
                        <a class="text-decoration-none text-success" href="?orderby=name&sort=asc&userFilter={{request()->userFilter}}">Created At <i class="fa-solid fa-caret-down"></i></a>
                    @else
                        <a class="text-decoration-none {{request()->orderby=='name' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=name&sort=desc&userFilter={{request()->userFilter}}">Name <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th style="width: 10%">
                    @if(request()->orderby=='date' && request()->sort=='desc')
                        <a class="text-decoration-none text-success" href="?orderby=date&sort=asc&userFilter={{request()->userFilter}}">Created At <i class="fa-solid fa-caret-down"></i></a>
                    @else
                        <a class="text-decoration-none {{request()->orderby=='date' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=date&sort=desc&userFilter={{request()->userFilter}}">Created At <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
            </tr>
            </thead>
            <tbody>
            @php
                $redirectTo = $users->url($users->currentPage());
                if (!$users -> hasMorePages() && $users -> count() == 1) {
                    $redirectTo = $users -> previousPageUrl();
                }
            @endphp
            @forelse($users as $index => $user)
                <tr>
                    <td>{{$user -> user_id}}</td>
                    <td>{{$user -> name}}</td>
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> password}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('users.edit', $user -> user_id)}}"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 delete-users" style="background-color: inherit"
                                data-id="{{$user -> user_id}}" data-name="{{$user -> name}}" data-email="{{$user -> email}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d/m/Y H:i', strtotime($user -> created_at))}}</td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td colspan="6" class="">No search results found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $users->links() }}
    </div>

    <!-- Modal -->
    <x-delete-modal>
        <x-slot:action>
            {{route('users.destroy',['id','redirect_to' => $redirectTo])}}
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
    </x-delete-modal>

</x-admin-layout>
