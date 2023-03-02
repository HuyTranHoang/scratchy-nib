<x-admin.layouts.master>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calligraphies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Add New Calligraphies</button>
            </div>
        </div>
    </div>


    <h3>Calligraphies List</h3>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Calligraphy Name</th>
                <th scope="col">Calligraphy Description</th>
                <th scope="col">Calligraphy Style</th>
                <th scope="col" class="text-center">Action</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($calligraphies as $calligraphy)
                <tr>
                    <td>{{$calligraphy -> calligraphy_id}}</td>
                    <td>{{$calligraphy-> calligraphy_name}}</td>
                    <td>{{$calligraphy -> calligraphy_description}}</td>
                    <td>{{$calligraphy-> calligraphyStyle -> style_name}}</td>
                    <td class="table-action text-center">
                        <a href="#"><i class="fa-solid fa-pen"></i></a>
                        <a href="#"><i class="fa-solid fa-trash"></i></a>
                    </td>
                    <td>{{date('d-m-Y', strtotime($calligraphy -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-admin.layouts.master>
