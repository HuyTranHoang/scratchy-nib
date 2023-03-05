<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calligraphy Styles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('styles.create')}}" class="btn btn-sm btn-outline-primary">Add New Styles</a>
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
            @foreach($styles as $index => $style)
                <tr>
                    <td>{{$style -> style_id}}</td>
                    <td>{{$style -> style_name}}</td>
                    <td>{{$style -> style_description}}</td>
                    <td class="table-action text-center d-flex justify-content-center">
                        <a href="{{route('styles.edit', $style -> style_id)}}"><i class="fa-solid fa-pen"></i></a>
                        <button type="button" class="ms-3 border-0 {{$index % 2 != 0 ? 'bg-white' : ''}} delete-style"
                                data-id="{{$style -> style_id}}" data-name="{{$style -> style_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>

                    <td>{{date('d-m-Y', strtotime($style -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <x-admin.partials.delete-modal>
        <x-slot:action>
            {{route('styles.destroy','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="style_id" name="style_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this style?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>

            <label for="style_name">Style name: </label>
            <input class="form-control mt-1" type="text" id="style_name" name="style_name" disabled readonly>
        </x-slot:body>
    </x-admin.partials.delete-modal>

</x-admin-layout>
