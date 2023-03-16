<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Calligraphy Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

                <a href="{{route('categories.create')}}" class="btn btn-sm btn-outline-primary">Add New Category</a>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-6">
            <h3>Categories list</h3>
        </div>

        <div class="d-sm-block col-md-6 d-md-flex justify-content-md-end">
            <a class="btn btn-primary-color rounded me-3 mb-3 mb-md-0" href="{{ route('categories.index') }}">Reset</a>
            <form action="" class="d-flex form-outline">
                <input class="form-control rounded-start rounded-0" value="{{ request()->cateName }}"
                       name="cateName" type="text" placeholder="Search by name.." aria-label="search">
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
                <th scope="col" style="width: 15%">
                    @if(request()->orderby=='name' && request()->sort=='desc')
                    <a class="text-decoration-none text-success" href="?orderby=name&sort=asc&cateName={{request()->cateName}}">Categories Name <i class="fa-solid fa-caret-down"></i></a>
                    @else
                    <a class="text-decoration-none {{request()->orderby=='name' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=name&sort=desc&cateName={{request()->cateName}}">Categories Name <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
                <th scope="col" style="max-width: 200px">Categories Image</th>
                <th scope="col">Categories Description</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col" style="width: 10%">
                    @if(request()->orderby=='date' && request()->sort=='desc')
                        <a class="text-decoration-none text-success" href="?orderby=date&sort=asc&cateName={{request()->cateName}}">Created At <i class="fa-solid fa-caret-down"></i></a>
                    @else
                        <a class="text-decoration-none {{request()->orderby=='date' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=date&sort=desc&cateName={{request()->cateName}}">Created At <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
            </tr>
            </thead>
            <tbody>
            @php
                $redirectTo = $categories->url($categories->currentPage());
                if (!$categories -> hasMorePages() && $categories -> count() == 1) {
                    $redirectTo = $categories -> previousPageUrl();
                }
            @endphp
            @forelse($categories as $index => $category)
                <tr>
                    <td>{{$category -> category_id}}</td>
                    <td>{{$category -> category_name}}</td>
                    <td>
                        <img src="{{ asset('storage/'.$category -> category_image) }}" alt="{{ $category -> category_image }}"
                             style="max-width: 200px">
                    </td>
                    <td>{!! $category -> category_description !!}</td>
                    <td class="text-center px-0">
                        <a href="{{route('categories.edit', $category -> category_id)}}"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 delete-category" style="background-color: inherit"
                                data-id="{{$category -> category_id}}" data-name="{{$category -> category_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d/m/Y H:i', strtotime($category -> created_at))}}</td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td colspan="6" class="">No search results found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>

    <!-- Modal -->
    <x-delete-modal>
        <x-slot:action>
            {{route('categories.destroy','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="category_id" name="category_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this category?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>

            <label for="category_name">Category name: </label>
            <input class="form-control mt-1" type="text" id="category_name" name="category_name" disabled readonly>
        </x-slot:body>
    </x-delete-modal>

</x-admin-layout>
