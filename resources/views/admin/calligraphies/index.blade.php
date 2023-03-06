<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary-color">Calligraphies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('calligraphies.create')}}" class="btn btn-sm btn-outline-primary">Add New Calligraphy</a>
            </div>
        </div>
    </div>


    <h3>Calligraphies List</h3>
    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Calligraphy Name</th>
                    <th scope="col">Calligraphy Image</th>
                    <th scope="col">Calligraphy Description</th>
                    <th scope="col">Calligraphy Style</th>
                    <th scope="col" colspan="2" class="text-center">Action</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
            @foreach($calligraphies as $index => $calligraphy)
                <tr>
                    <td>{{$calligraphy -> calligraphy_id}}</td>
                    <td>{{$calligraphy-> calligraphy_name}}</td>
                    <td>
                        @forelse($calligraphy-> galleryImage as $image)
                            <img src="{{ asset('storage/'.$image -> image_name) }}" alt="{{ $image -> image_name }}"
                                 style="max-width: 120px">
                        @empty
                            <img src="{{ asset('storage/images/noimage.jpg') }}" alt="No image" style="max-width: 120px">
                        @endforelse
{{--                        @foreach ($calligraphy-> galleryImage as $image)--}}
{{--                            <img src="{{ asset('storage/'.$image -> image_name) }}" alt="{{ $image -> image_name }}"--}}
{{--                                 style="max-width: 120px">--}}
{{--                        @endforeach--}}
                    </td>
                    <td>{{$calligraphy -> calligraphy_description}}</td>
                    <td>{{$calligraphy-> calligraphyStyle -> style_name}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('calligraphies.edit', $calligraphy -> calligraphy_id)}}"><i class="px-1 fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 {{$index % 2 != 0 ? 'bg-white' : ''}} delete-calligraphy"
                                data-id="{{$calligraphy -> calligraphy_id}}" data-name="{{$calligraphy -> calligraphy_name}}"
                                data-style="{{$calligraphy -> calligraphyStyle -> style_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d-m-Y', strtotime($calligraphy -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <x-admin.partials.delete-modal>
        <x-slot:action>
            {{route('calligraphies.destroy','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="calligraphy_id" name="calligraphy_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this calligraphy?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>

            <label for="calligraphy_name">Calligraphy name: </label>
            <input class="form-control mt-1 mb-2" type="text" id="calligraphy_name" name="calligraphy_name" disabled readonly>
            <label for="calligraphy_style">Calligraphy style: </label>
            <input class="form-control mt-1" type="text" id="calligraphy_style" name="calligraphy_style" disabled readonly>
        </x-slot:body>
    </x-admin.partials.delete-modal>

</x-admin-layout>
