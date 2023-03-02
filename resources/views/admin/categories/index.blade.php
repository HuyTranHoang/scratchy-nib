<x-admin.layouts.master>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calligraphy Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('categories.create')}}" class="btn btn-sm btn-outline-primary">Add New Categories</a>
            </div>
        </div>
    </div>

    <h3>Categories List</h3>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categories Name</th>
                <th scope="col">Categories Description</th>
                <th scope="col" class="text-center">Action</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $index => $category)
                <tr>
                    <td>{{$category -> category_id}}</td>
                    <td>{{$category -> category_name}}</td>
                    <td>{{$category -> category_description}}</td>
                    <td class="table-action text-center d-flex justify-content-center">
                        <a href="{{route('categories.edit', $category -> category_id)}}"><i class="fa-solid fa-pen"></i></a>
                        <form method="post" action="{{route('categories.destroy', $category -> category_id)}}">
                            @csrf
                            @method('delete')
                            <button class="ms-3 border-0 {{$index % 2 != 0 ? 'bg-white' : ''}}"><i class="text-primary fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    <td>{{date('d-m-Y', strtotime($category -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-admin.layouts.master>
