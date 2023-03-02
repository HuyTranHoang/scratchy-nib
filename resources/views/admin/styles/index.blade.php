<x-admin.layouts.master>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calligraphy Styles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Add New Styles</button>
            </div>
        </div>
    </div>


    <h3>Styles List</h3>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Styles Name</th>
                <th scope="col">Styles Description</th>
                <th scope="col" class="text-center">Action</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($styles as $style)
                <tr>
                    <td>{{$style -> style_id}}</td>
                    <td>{{$style -> style_name}}</td>
                    <td>{{$style -> style_description}}</td>
                    <td class="table-action text-center">
                        <a href="#"><i class="fa-solid fa-pen"></i></a>
                        <a href="#"><i class="fa-solid fa-trash"></i></a>
                    </td>
                    <td>{{date('d-m-Y', strtotime($style -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-admin.layouts.master>
