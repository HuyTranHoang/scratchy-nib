<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calligraphy Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('categories.create')}}" class="btn btn-sm btn-outline-primary">Add New Category</a>
            </div>
        </div>
    </div>

    <h3>Categories List</h3>
    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categories Name</th>
                <th scope="col">Categories Description</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $index => $category)
                <tr>
                    <td>{{$category -> category_id}}</td>
                    <td>{{$category -> category_name}}</td>
                    <td>{{$category -> category_description}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('categories.edit', $category -> category_id)}}"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 {{$index % 2 != 0 ? 'bg-white' : ''}} delete-category"
                                data-id="{{$category -> category_id}}" data-name="{{$category -> category_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d-m-Y', strtotime($category -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <x-admin.partials.delete-modal>
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
    </x-admin.partials.delete-modal>

</x-admin-layout>
